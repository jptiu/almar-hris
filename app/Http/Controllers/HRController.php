<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HRController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_unless(Gate::allows('hr_access'), 404);
        
        return view('pages.hr.index');
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
    public function store(Request $request)
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

    /**
     * The function `loanRenewals` returns a view for the HR renewals index page in a PHP application.
     * 
     * @return A view named 'index' located in the 'renewals' folder within the 'hr' folder in the
     * 'pages' directory is being returned.
     */
    public function loanRenewals()
    {
        return view('pages.hr.renewals.index');
    }

    public function auditScheduling()
    {
        return view('pages.hr.audit.index');
    }

    public function pendingLoanApprovals()
    {
        return view('pages.hr.loanapprovals.index');
    }

    public function employeeEvaluation()
    {
        return view('pages.hr.evaluations.index');
    }

    public function monthlyReport()
    {
        return view('pages.hr.monthlyrep.index');
    }

    public function payRoll()
    {
        return view('pages.hr.payroll.index');
    }

    public function biometricsAttendance()
    {
        return view('pages.hr.attendance.index');
    }

    public function approvedLoans()
    {
        return view('pages.hr.loanapprovals.approved.index');
    }

    public function rejectedLoans()
    {
        return view('pages.hr.loanapprovals.rejected.index');
    }


}
