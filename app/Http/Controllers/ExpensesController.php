<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use App\Models\Expenses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_unless(Gate::allows('loan_access') || Gate::allows('branch_access') || Gate::allows('hr_access'), 404);
        $lists = Expenses::get();

        return view('pages.expenses.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort_unless(Gate::allows('loan_access') || Gate::allows('branch_access'), 404);
        
        
        return view('pages.expenses.entry.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $exp = new Expenses();
        $exp->exp_ref_no = $request->exp_ref_no;
        $exp->acc_no = $request->acc_no;
        $exp->acc_class = $request->acc_class;
        $exp->acc_type = $request->acc_type;
        $exp->acc_title = $request->acc_title;
        $exp->justification = $request->justification;
        $exp->or_no = $request->or_no;
        $exp->amount = $request->amount;
        $exp->exp_date = $request->exp_date;
        $exp->save();

        return redirect(route("expenses.index"))->with('success', 'Created Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        abort_unless(Gate::allows('loan_access') || Gate::allows('branch_access'), 404);
        $expenses = Expenses::where('id', $id)->first();

        return view('pages.expenses.show.index', compact('expenses'));
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

    public function getAccountData($acctNo)
{
    $account = Chart::where('acc_no', $acctNo)->first();

    if ($account) {
        return response()->json([
            'account_class' => $account->acc_class,
            'account_type' => $account->acc_type,
            'account_title' => $account->acc_title,
        ]);
    } else {
        return response()->json(null);
    }
}
}
