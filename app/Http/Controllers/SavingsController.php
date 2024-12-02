<?php

namespace App\Http\Controllers;


use App\Http\Requests\SavingsCreateRequest;
use Illuminate\Http\Request;
// use App\Http\Controllers\SavingsController;
use Illuminate\Support\Facades\Gate;
use App\Models\Savings;

class SavingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_unless(Gate::allows('loan_access') || Gate::allows('branch_access'), 404);
        $branch = auth()->user()->branch_id;
        $lists = Savings::where('branch_id', $branch)->get();

        return view('pages.savings.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort_unless(Gate::allows('loan_access') || Gate::allows('branch_access'), 404);
        $branch = auth()->user()->branch_id;
        $lists = Savings::where('branch_id', $branch)->get();
        return view('pages.savings.add.index', compact('lists'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SavingsCreateRequest $request)
    {
        abort_unless(Gate::allows('loan_access') || Gate::allows('branch_access'), 404);
        $branch = auth()->user()->branch_id;
        if($request->validated()){
            $savings = new Savings();
            $savings->employee_id = $request->employee_id;
            $savings->total_savings = $request->total_savings;
            $savings->balance = $request->balance;
            $savings->branch_id = $branch;
            $savings->save();

            return redirect(route("savings.index"))->with('success', 'Created Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        abort_unless(Gate::allows('loan_access') || Gate::allows('branch_access'), 404);
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
        abort_unless(Gate::allows('loan_access') || Gate::allows('branch_access'), 404);
        $savings = Savings::find($id);
        $savings->delete();

        return redirect()->back()->with('success', 'Savings deleted.');
    }

    public function savingsCustomer()
    {
        //abort_unless(Gate::allows('collector_access'), 404);
        
        return view('pages.savingscustomer.index');
    }
}
