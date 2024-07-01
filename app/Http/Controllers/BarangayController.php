<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarangayCreateRequest;
use App\Http\Requests\BarangayUpdateRequest;
use App\Models\Barangay;
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
        ->where('barangay_name', 'LIKE', '%', $request->search, '%')->orderBy('ASC')
        ->get();

        return view('pages.barangay.index', compact('lists'));
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
            $brgy->barangay = $request->barangay;
            $brgy->code = $request->code;
            $brgy->city = $request->city;
            $brgy->user_id = $request->user_id;
            $brgy->save();

            return redirect()->back()->with('success', 'Barangay Created.');
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
        $brgy = Barangay::where('id', $id)->get();

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
}
