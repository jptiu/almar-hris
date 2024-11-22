<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Payroll;

class PayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lists = Payroll::with('employee')->get();

        return view('pages.hr.payroll.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::get();

        return view('pages.hr.payroll.add.index', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payroll = new Payroll();
        $payroll->user_id = $request->user_id;
        $payroll->full_name = $request->full_name;
        $payroll->position = $request->position;
        $payroll->current_rate = $request->current_rate;
        $payroll->date_of_payroll = $request->date_of_payroll;
        $payroll->start_date = $request->start_date;
        $payroll->end_date = $request->end_date;
        $payroll->days_of_work = $request->days_of_work;
        $payroll->total_salary = $request->total_salary;
        $payroll->save();

        return redirect(route("payroll.index"))->with('success', 'Created Successfully');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function payrollPrint(Request $request)
    {

        return view('pages.hr.payroll.print.index');
    }
}
