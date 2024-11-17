<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarangayCreateRequest;
use App\Http\Requests\BarangayUpdateRequest;
use App\Models\Barangay;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class BarangayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {
        abort_unless(Gate::allows('loan_access') || Gate::allows('branch_access'), 404);
        $lists = Barangay::where('barangay_name', 'LIKE', '%', $request->search, '%')->orderBy("created_at", "asc")
        ->get();

        return view('pages.barangay.index', compact('lists'));
    }

    public function add()
    {
        abort_unless(Gate::allows('loan_access') || Gate::allows('branch_access'), 404);
        $collectors = User::where('roles.title', 'Collector')
        ->join('role_user', 'users.id', '=', 'role_user.user_id')
        ->join('roles', 'role_user.role_id', '=', 'roles.id')
        ->get();

        return view('pages.barangay.add.index', compact('collectors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BarangayCreateRequest $request)
    {
        abort_unless(Gate::allows('loan_access') || Gate::allows('branch_access'), 404);
        if($request->validated()){
            $brgy = new Barangay();
            $brgy->barangay_name = $request->barangay_name;
            $brgy->code = $request->code;
            $brgy->city = $request->city;
            $brgy->user_id = $request->user_id;
            $brgy->save();

            return redirect(route("barangay.index"))->with('success', 'Created Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort_unless(Gate::allows('loan_access') || Gate::allows('branch_access'), 404);
        $brgy = Barangay::where('id', $id)->first();
        $collectors = User::where('roles.title', 'Collector')
        ->join('role_user', 'users.id', '=', 'role_user.user_id')
        ->join('roles', 'role_user.role_id', '=', 'roles.id')
        ->get();

        return view('pages.barangay.update.index', compact('brgy','collectors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BarangayUpdateRequest $request, string $id)
    {
        abort_unless(Gate::allows('loan_access') || Gate::allows('branch_access'), 404);
        if($request->validated()){
            $brgy = Barangay::find($id);
            $brgy->barangay_name = $request->barangay_name;
            $brgy->code = $request->code;
            $brgy->city = $request->city;
            $brgy->user_id = $request->user_id;
            $brgy->update();

            return redirect(route("barangay.index"))->with('success', 'Barangay Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort_unless(Gate::allows('loan_access') || Gate::allows('branch_access'), 404);
        $brgy = Barangay::find($id);
        $brgy->delete();

        return redirect()->back()->with('success', 'Barangay deleted.');
    }

    public function importCSV(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt|max:2048', // Validate the uploaded file
        ]);

        $file = $request->file('file');

        // Read the CSV data
        $csvData = file_get_contents($file);
        // dd($csvData);

        // Split CSV data into rows
        $rows = array_map('str_getcsv', explode("\n", $csvData));

        // Remove the header row if it exists
        $header = array_shift($rows);
        // dd($header);

        foreach ($rows as $row) {
            // Create and save your model instance
            Barangay::create([
                'city_town_id' => $row[0],
                'barangay_name' => $row[2],
                'user_id' => $row[3],
            ]);
        }

        return redirect(route("barangay.index"))->with('success', 'CSV Data Imported Successfully');
    }
}
