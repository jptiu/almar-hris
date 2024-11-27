<?php

namespace App\Http\Controllers;

use App\Models\Loan;
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
        $branch = auth()->user()->branch_id;

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
        $lists = Loan::where('transaction_customer_status', 'BA')->paginate(20);
        return view('pages.badacc.index', compact('lists'));
    }

    public function regAccount(Request $request)
    {
        $lists = Loan::where('transaction_customer_status', '')->paginate(20);
        return view('pages.regacc.index', compact('lists'));
    }

    public function todaysPayer(Request $request)
    {
        return view('pages.todaypayer.index');
    }

    public function latePayer(Request $request)
    {
        return view('pages.latepayer.index');
    }
    public function paymentHistory(Request $request)
    {
        return view('pages.payhistory.index');
    }

    public function pendingLoandApproval(Request $request)
    {
        $branch = auth()->user()->branch_id;
        $lists = Loan::where('branch_id', $branch)->get();

        return view('pages.pendingloanapp.index', compact('lists'));
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

    public function overdueAcc(Request $request)
    {
        return view('pages.overdueacc.index');
    }

    public function biometricsAttendance()
    {
        return view('pages.attendancebm.index');
    }

    public function csor()
    {
        return view('pages.csor.index');
    }

    public function payRoll()
    {
        return view('pages.payroll.index');
    }
}
