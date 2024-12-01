<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('compute_cash_on_hands', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('ref_no')->nullable(); // Reference Number
            $table->date('prev_transaction_date')->nullable(); // Previous Transaction Date
            $table->decimal('cash_beginning', 10, 2)->default(0.00); // Cash Beginning
            $table->date('transaction_date')->nullable(); // Today's Transaction Date
            $table->decimal('collection', 10, 2)->default(0.00); // Collection
            $table->decimal('add_cash', 10, 2)->default(0.00); // Add Cash
            $table->decimal('add_cash_2', 10, 2)->default(0.00); // Add Cash (2nd)
            $table->decimal('loan_releases', 10, 2)->default(0.00); // Today's Loan Releases
            $table->decimal('expenses', 10, 2)->default(0.00); // Today's Expenses
            $table->decimal('new_cash_on_hand', 10, 2)->default(0.00); // New Cash on Hand

            // Financial Figures
            $table->decimal('charge_swipe', 10, 2)->default(0.00); // Charge Swipe
            $table->decimal('savings', 10, 2)->default(0.00); // Savings
            $table->decimal('death_aid', 10, 2)->default(0.00); // Death Aid
            $table->decimal('photocopy', 10, 2)->default(0.00); // Photocopy
            $table->decimal('withdraw', 10, 2)->default(0.00); // Withdraw
            $table->decimal('xerox', 10, 2)->default(0.00); // Xerox

            // Details of add cash from savings customers
            $table->decimal('penalty', 10, 2)->default(0.00);
            $table->decimal('passbook', 10, 2)->default(0.00);
            $table->decimal('details_withdraw', 10, 2)->default(0.00);
            $table->decimal('details_xerox', 10, 2)->default(0.00);

            $table->string('user_id')->nullable(); // Cashier's Name

            $table->timestamps(); // Created and Updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compute_cash_on_hands');
    }
};
