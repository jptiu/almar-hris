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
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('loan_type');
            $table->string('transaction_type');
            $table->string('trans_no');
            $table->string('date_of_loan');
            $table->string('customer_id');
            $table->string('customer_type');
            $table->string('status');
            $table->string('principal_amount');
            $table->string('days_to_pay');
            $table->string('months_to_pay');
            $table->string('interest');
            $table->string('interest_amount');
            $table->string('svc_charge');
            $table->string('actual_record');
            $table->string('payable_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
