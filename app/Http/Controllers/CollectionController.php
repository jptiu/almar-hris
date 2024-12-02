<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Customer;
use App\Models\Loan;
use App\Models\LoanDetails;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //abort_unless(Gate::allows('loan_access'), 404);
        $branch = auth()->user()->branch_id;
        $lists = Collection::with('user')->where('branch_id', $branch)->paginate(20);
        $customers = Customer::where('branch_id', $branch)->get();
        $collectors = User::where('branch_id', $branch)->where('roles.title', 'Collector')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->get();
        $loan = [];
        $customer = [];
        if ($request->transaction_no) {
            $loan = Loan::with('customer')->find($request->transaction_no);
        }
        if ($request->customer_id) {
            $customer = Customer::with('loan')->find($request->customer_id);
        }
        // Check if the request is an AJAX call
        if ($request->ajax()) {
            return response()->json([
                'customer' => $customer,
                'loan' => $loan,
            ]);
        }

        return view('pages.collections.index', compact('lists', 'customers', 'collectors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort_unless(Gate::allows('loan_access') || Gate::allows('branch_access'), 404);
        $branch = auth()->user()->branch_id;
        $customers = Customer::where('branch_id', $branch)->get();
        $collectors = User::where('branch_id', $branch)->where('roles.title', 'Collector')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->get();

        return view('pages.collections.entry.index', compact('customers', 'collectors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $loan = Loan::findOrFail($request->trans_no);
        $loanDetails = LoanDetails::where('loan_id', $loan->id)
            ->where('loan_date_paid', '!=', '')
            ->orWhere('loan_date_paid', '!=', null)
            ->get();
        if($loanDetails->loan_due_date == now()->toDateString()){
            $loanDetails->loan_date_paid = now()->toDateString();
            $loanDetails->loan_amount_paid = $request->amount_paid;
            $loanDetails->update();
        }

        if ($loan) {
            $col = new Collection();
            $col->user_id = auth()->user()->id;
            $col->name = $request->name;
            $col->type = $request->type;
            $col->status = $request->status;
            $col->trans_no = $request->trans_no;
            $col->collector_id = auth()->user()->id;
            $col->date = $request->date_of_loan;
            $col->save();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        abort_unless(Gate::allows('loan_access') || Gate::allows('branch_access'), 404);
        $collection = Collection::where('id', $id)->first();

        return view('pages.collections.show.index', compact('collection'));
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
}
