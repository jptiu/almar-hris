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
        $lists = SavingsDeposit::paginate(20);
        return view('pages.savingscustomer.depositentry.index', compact('lists'));
    }

    public function createDeposit()
    {
        return view('pages.savingscustomer.depositentry.entry.index');
    }

    public function storeDeposit(Request $request)
    {
        $request->validate([
            'customer_id' => 'required',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        SavingsDeposit::create($request->all());
        return redirect()->route('savings.deposit.index')->with('success', 'Deposit entry created successfully.');
    }

    // Savings Withdrawal Methods
    public function indexWithdrawal()
    {
        $lists = SavingsWithdrawal::paginate(20);
        return view('pages.savingscustomer.withdrawalentry.index', compact('lists'));
    }

    public function createWithdrawal()
    {
        return view('pages.savingscustomer.withdrawalentry.entry.index');
    }

    public function storeWithdrawal(Request $request)
    {
        $request->validate([
            'customer_id' => 'required',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        SavingsWithdrawal::create($request->all());
        return redirect()->route('savings.withdrawal.index')->with('success', 'Withdrawal entry created successfully.');
    }
   
}
