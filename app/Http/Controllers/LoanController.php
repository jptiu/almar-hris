<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoanCreateRequest;
use App\Http\Requests\LoanUpdateRequest;
use App\Models\Customer;
use App\Models\CustomerType;
use App\Models\Loan;
use App\Models\LoanDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        abort_unless(Gate::allows('loan_access') || Gate::allows('branch_access'), 404);
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

        return view('pages.loan.index', compact('lists', 'types', 'customer', 'loan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        abort_unless(Gate::allows('loan_access') || Gate::allows('branch_access'), 404);
        $branch = auth()->user()->branch_id;
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

        return view('pages.loan.entry.index', compact('types', 'customer', 'loan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LoanCreateRequest $request)
    {
        abort_unless(Gate::allows('loan_access') || Gate::allows('branch_access'), 404);
        $branch = auth()->user()->branch_id;
        try {
            if ($request->validated()) {
                $loan = new Loan();
                $loan->loan_type = $request->loan_type;
                $loan->transaction_type = $request->transaction_type;
                // $loan->trans_no = $request->trans_no;
                $loan->date_of_loan = $request->date_of_loan;
                $loan->customer_id = $request->customer_id;
                $loan->customer_type = $request->customer_type;
                $loan->status = null;
                $loan->principal_amount = $request->principal_amount;
                $loan->days_to_pay = $request->days_to_pay;
                $loan->months_to_pay = $request->months_to_pay;
                $loan->interest = $request->interest;
                $loan->interest_amount = $request->interest_amount;
                $loan->svc_charge = $request->svc_charge;
                $loan->actual_record = $request->actual_record;
                $loan->payable_amount = $request->payable_amount;
                $loan->branch_id = $branch;
                $loan->save();

                return redirect()->back()->with('success', 'Loan Entry Created.');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('success', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        abort_unless(Gate::allows('loan_access') || Gate::allows('branch_access'), 404);
        $branch = auth()->user()->branch_id;
        $loan = Loan::where('branch_id', $branch)->where('id', $id)->first();

        return view('pages.loan.show.index', compact('loan'));
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
    public function update(LoanUpdateRequest $request, string $id)
    {
        abort_unless(Gate::allows('loan_access') || Gate::allows('branch_access'), 404);
        if ($request->validated()) {
            $loan = Loan::find($id);
            $loan->loan_type = $request->loan_type;
            $loan->transaction_type = $request->transaction_type;
            $loan->trans_no = $request->trans_no;
            $loan->date_of_loan = $request->date_of_loan;
            $loan->customer_id = $request->customer_id;
            $loan->customer_type = $request->customer_type;
            $loan->status = $request->status;
            $loan->principal_amount = $request->principal_amount;
            $loan->days_to_pay = $request->days_to_pay;
            $loan->months_to_pay = $request->months_to_pay;
            $loan->interest = $request->interest;
            $loan->interest_amount = $request->interest_amount;
            $loan->svc_charge = $request->svc_charge;
            $loan->actual_record = $request->actual_record;
            $loan->payable_amount = $request->payable_amount;
            $loan->save();

            return redirect()->back()->with('success', 'Loan Entry Updated.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        abort_unless(Gate::allows('loan_access') || Gate::allows('branch_access'), 404);
        $loan = Loan::find($id);
        $loan->delete();

        return redirect()->back()->with('success', 'Loan deleted.');
    }

    public function importCSV(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt|max:2048', // Validate the uploaded file
        ]);
        $branch = auth()->user()->branch_id;

        $file = $request->file('file');

        // Read the CSV data
        $csvData = file_get_contents($file);
        // dd($csvData);

        // Split CSV data into rows
        $rows = array_map('str_getcsv', explode("\n", $csvData));

        // Remove the header row if it exists
        $header = array_shift($rows);
        // dd($header);

        foreach ($rows as $row) {
            // Create and save your model instance
            Loan::create([
                'id' => $row[0],
                'date_of_loan' => $row[1],
                'customer_id' => $row[2],
                'principal_amount' => $row[3],
                'payable_amount' => $row[4],
                'days_to_pay' => $row[5],
                'months_to_pay' => $row[6],
                'interest' => $row[7],
                'status' => $row[9],
                'transaction_customer_status' => $row[10],
                'transaction_customer_status_date' => $row[11],
                'transaction_type' => $row[12],
                'transaction_with_collateral' => $row[13],
                'transaction_with_cert' => $row[14],
                'user_id' => $row[15],
                'branch_id' => $branch,
            ]);
        }

        return redirect(route("loan.index"))->with('success', 'CSV Data Imported Successfully');
    }

    public function importCSVDetails(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt|max:20000', // Validate the uploaded file
        ]);
        $branch = auth()->user()->branch_id;

        $file = $request->file('file');

        // Read the CSV data
        $csvData = file_get_contents($file);
        // dd($csvData);

        // Split CSV data into rows
        $rows = array_map('str_getcsv', explode("\n", $csvData));

        // Remove the header row if it exists
        $header = array_shift($rows);
        // dd($header);

        foreach ($rows as $row) {
            // Create and save your model instance
            LoanDetails::create([
                'id' => $row[1],
                'loan_id' => $row[0],//Lnkltranh_no
                'loan_day_no' => $row[2],//ltrand_dayno
                'loan_due_date' => $row[3],//ltrand_duedate
                'loan_due_amount' => $row[4],//ltrand_dueamt
                'loan_date_paid' => $row[5],//ltrand_datepaid
                'loan_amount_paid' => $row[6],//ltrand_amtpaid
                'loan_running_balance' => $row[7],//ltrand_runbal
                'user_id' => $row[9],//ltrand_clctor
                'loan_bank' => $row[10],//ltrand_bank
                'loan_check_no' => $row[11],//ltrand_chkno
                'loan_remarks' => $row[12],//ltrand_rem
                'loan_amount_tenderd' => $row[13],//ltrand_amttend
                'loan_amount_change' => $row[14],//ltrand_amtchange
                'loan_withdraw_from_bank' => $row[15],//ltrand_withdrawn_frombank
                'branch_id' => $branch,
            ]);
        }

        return redirect(route("loan.index"))->with('success', 'Loan Details Imported Successfully');
    }
}
