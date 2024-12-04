<?php

namespace App\Http\Controllers;

use App\Http\Requests\CLMCreateRequest;
use App\Http\Requests\CLMUpdateRequest;
use App\Models\Branch;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CLMController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        abort_unless(Gate::allows('loan_access') || Gate::allows('branch_access'), 404);
        $branch = auth()->user()->branch_id;
        $branches = Branch::paginate(10);
        $customer = '';
        if($request->customer_id){
            $customer = Customer::where('branch_id', $branch)->where('id', 'LIKE', '%', $request->customer_id, '%')->first();
        }
        return view('pages.customer.month.index', compact('branches', 'customer'));
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
    public function store(CLMCreateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(CLMUpdateRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return view('pages.hr.payroll.print.index');
    }

    public function printLoan(Request $request)
    {
        $lists = Customer::all();
        return view('pages.customer.month.printLoan.index', compact('lists'));
    }

    public function printStatement(Request $request)
    {
        $lists = Customer::all();
        return view('pages.customer.month.printStatement.index', compact('lists'));
    }

}
