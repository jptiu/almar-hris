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
        abort_unless(Gate::allows('loan_access'), 404);
        $lists = Barangay::with('user')
        ->where('barangay_name', 'LIKE', '%', $request->search, '%')->orderBy("created_at", "asc")
        ->get();

        return view('pages.barangay.index', compact('lists'));
    }

    public function add()
    {
        abort_unless(Gate::allows('loan_access'), 404);
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
        abort_unless(Gate::allows('loan_access'), 404);
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
        abort_unless(Gate::allows('loan_access'), 404);
        $brgy = Barangay::where('id', $id)->first();

        return view('barangay.show', compact('brgy'));
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
    public function update(BarangayUpdateRequest $request, $id)
    {
        abort_unless(Gate::allows('loan_access'), 404);
        if($request->validated()){
            $brgy = Barangay::find($id);
            $brgy->barangay = $request->barangay;
            $brgy->code = $request->code;
            $brgy->city = $request->city;
            $brgy->user_id = $request->user_id;
            $brgy->update();

            return redirect()->back()->with('success', 'Barangay updated.');
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
        abort_unless(Gate::allows('loan_access'), 404);
        $brgy = Barangay::find($id);
        $brgy->delete();

        return redirect()->back()->with('success', 'Barangay deleted.');
    }

    public function importCSV(Request $request)
    {
        $request->validate([
            'import_csv' => 'required|mimes:csv',
        ]);
        //read csv file and skip data
        $file = $request->file('import_csv');
        $handle = fopen($file->path(), 'r');

        //skip the header row
        fgetcsv($handle);

        $chunksize = 25;
        while(!feof($handle))
        {
            $chunkdata = [];

            for($i = 0; $i<$chunksize; $i++)
            {
                $data = fgetcsv($handle);
                if($data === false)
                {
                    break;
                }
                $chunkdata[] = $data; 
            }

            $this->getchunkdata($chunkdata);
        }
        fclose($handle);

        return redirect()->route('employee.create')->with('success', 'Data has been added successfully.');
    }

    public function getchunkdata($chunkdata)
    {
        foreach($chunkdata as $column){
            $firstname = $column[0];
            $lastname = $column[1];
            $email = $column[2];
            $phoneNumber = $column[3];
            $dateOfBirth = $column[4];
            $gender = $column[5];
            $address = $column[6];
            $skill = json_encode([$column[7]]);
            $sallary = $column[8];

            //create new employee
            $employee = new Barangay();
            $employee->first_name = $firstname;
            $employee->last_name = $lastname;
            $employee->email = $email;
            $employee->phone = $phoneNumber;
            $employee->date_of_birth = $dateOfBirth;
            $employee->gender = $gender;
            $employee->address = $address;
            $employee->skills = $skill;
            $employee->basic_salary = $sallary;
            $employee->save();
        }
    }
}
