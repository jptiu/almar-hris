<?php

namespace App\Http\Controllers;


use App\Http\Requests\SavingsCreateRequest;
use Illuminate\Http\Request;
// use App\Http\Controllers\SavingsController;
use Illuminate\Support\Facades\Gate;
use App\Models\SavingsDeposit;
use App\Models\SavingsWithdrawal;

class SavingsController extends Controller
{

    // Savings Deposit Methods
    public function indexDeposit()
    {
        $branch = auth()->user()->branch_id;
        $lists = SavingsDeposit::paginate(20);
        return view('pages.savingscustomer.depositentry.index', compact('lists'));
    }

    public function createDeposit()
    {
        return view('pages.savingscustomer.depositentry.entry.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeDeposit(Request $request)
    {
        $branch = auth()->user()->branch_id;
        $dep = new SavingsDeposit();
        $dep->customer_id = $request->customer_id;
        $dep->customer_name = $request->customer_name;
        $dep->tran_date = $request->tran_date;
        $dep->amount = $request->amount;
        $dep->save();

        return redirect()->route('depositentry.index')->with('success', 'Deposit entry created successfully.');
    }

    // Savings Withdrawal Methods
    public function indexWithdrawal()
    {
        $branch = auth()->user()->branch_id;
        $lists = SavingsWithdrawal::paginate(20);
        return view('pages.savingscustomer.withdrawalentry.index', compact('lists'));
    }

    public function createWithdrawal()
    {
        return view('pages.savingscustomer.withdrawalentry.entry.index');
    }

    public function storeWithdrawal(Request $request)
    {
        $branch = auth()->user()->branch_id;
        $request->validate([
            'customer_id' => 'required',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        SavingsWithdrawal::create($request->all());
        return redirect()->route('savings.withdrawal.index')->with('success', 'Withdrawal entry created successfully.');
    }
   
}
