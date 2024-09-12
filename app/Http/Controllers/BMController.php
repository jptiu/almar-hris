<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class BMController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_unless(Gate::allows('branch_access'), 404);
        
        return view('pages.branch.index');
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

    public function employeeEvaluation(Request $request)
    {
        return view('pages.employeeevaluation.index');
    }

    public function cashReqForm(Request $request)
    {
        return view('pages.cashadvreqform.index');
    }

    public function cashBond(Request $request)
    {
        return view('pages.cashbond.index');
    }

    public function badAccount(Request $request)
    {
        return view('pages.badacc.index');
    }

    public function todaysPayer(Request $request)
    {
        return view('pages.todaypayer.index');
    }

    public function latePayer(Request $request)
    {
        return view('pages.latepayer.index');
    }

    public function pendingLoandApproval(Request $request)
    {
        return view('pages.pendingloanapp.index');
    }

    public function approvedLoan(Request $request)
    {
        return view('pages.pendingloanapp.approvedloans.index');
    }

    public function rejectedLoan(Request $request)
    {
        return view('pages.pendingloanapp.rejectedloans.index');
    }

    public function loanRenewal(Request $request)
    {
        return view('pages.loanrenewal.index');
    }
}