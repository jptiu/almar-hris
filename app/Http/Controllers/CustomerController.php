<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerCreateRequest;
use App\Http\Requests\CustomerUpdateRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_unless(Gate::allows('loan_access'), 404);
        $lists = Customer::get();

        return view('pages.customer.index', compact('lists'));
    }

    public function add()
    {
        abort_unless(Gate::allows('loan_access'), 404);

        return view('pages.customer.add.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CustomerCreateRequest $request)
    {
        abort_unless(Gate::allows('loan_access'), 404);
        if ($request->validated()) {
            $customer = new Customer();
            $customer->type = $request->type;
            $customer->first_name = $request->first_name;
            $customer->middle_name = $request->middle_name;
            $customer->last_name = $request->last_name;
            $customer->house = $request->house;
            $customer->street = $request->street;
            $customer->barangay = $request->barangay;
            $customer->city = $request->city;
            $customer->job_position = $request->job_position;
            $customer->salary_sched = $request->salary_sched;
            $customer->tel_number = $request->tel_number;
            $customer->cell_number = $request->cell_number;
            $customer->status = $request->status;
            $customer->save();

            return redirect()->back()->with('success', 'Customer created.');

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        abort_unless(Gate::allows('loan_access'), 404);
        $customer = Customer::where('id', $id)->get();

        return view('customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CustomerUpdateRequest $request, string $id)
    {
        abort_unless(Gate::allows('loan_access'), 404);
        if ($request->validated()) {
            $customer = Customer::find($id);
            $customer->type = $request->type;
            $customer->first_name = $request->first_name;
            $customer->middle_name = $request->middle_name;
            $customer->last_name = $request->last_name;
            $customer->house = $request->house;
            $customer->street = $request->street;
            $customer->barangay = $request->barangay;
            $customer->city = $request->city;
            $customer->job_position = $request->job_position;
            $customer->salary_sched = $request->salary_sched;
            $customer->tel_number = $request->tel_number;
            $customer->cell_number = $request->cell_number;
            $customer->status = $request->status;
            $customer->save();

            return redirect()->back()->with('success', 'Customer updated.');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        abort_unless(Gate::allows('loan_access'), 404);
        $customer = Customer::find($id);
        $customer->delete();

        return redirect()->back()->with('success', 'Customer deleted.');
    }
}
