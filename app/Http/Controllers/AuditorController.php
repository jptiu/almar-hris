<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CustomerType;
use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AuditorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_unless(Gate::allows('auditor_access'), 404);
        $branch = auth()->user()->branch_id;
        
        return view('pages.auditor.index');
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

    public function loanLists(Request $request)
    {
        abort_unless(Gate::allows('auditor_access'), 404);
        $branch = auth()->user()->branch_id;
        if ($request->search) {
            $lists = Loan::with(['customer'])->where('branch_id', $branch)
                ->where('id', $request->search)
                ->paginate(10);
        } else {
            $lists = Loan::where('branch_id', $branch)->paginate(10);
        }
        $types = CustomerType::where('branch_id', $branch)->get();
        $loan = [];
        $customer = [];
        if ($request->transaction_no) {
            $loan = Loan::with('customer')->find($request->transaction_no);
        }
        if ($request->id) {
            $customer = Customer::find($request->id);
        }
        // Check if the request is an AJAX call
        if ($request->ajax()) {
            return response()->json([
                'customer' => $customer,
                'loan' => $loan,
            ]);
        }

        return view('pages.auditor.loans.index', compact('lists', 'types', 'customer', 'loan'));
        
    }

    public function customerLists(Request $request)
    {
        abort_unless(Gate::allows('auditor_access'), 404);
        try {
            $branch = auth()->user()->branch_id;
            if ($request->search) {
                $lists = Customer::where('branch_id', $branch)
                    ->where('first_name', 'LIKE', '%' . $request->search . '%')
                    ->orderBy("created_at", "asc")
                    ->paginate(20);
            } else {
                $lists = Customer::where('branch_id', $branch)->paginate(20);
            }


            return view('pages.auditor.customers.index', compact('lists'));
        } catch (\Throwable $th) {
            //throw $th;
            $lists = Customer::where('branch_id', $branch)->paginate(20);
            return view('pages.auditor.customers.index', compact('lists'));
        }
    }
}
