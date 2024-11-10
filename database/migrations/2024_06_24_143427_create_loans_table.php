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
            $table->string('loan_type')->nullable();
            $table->string('transaction_type')->nullable();
            $table->string('trans_no')->nullable();
            $table->string('date_of_loan')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('customer_type')->nullable();
            $table->string('status')->nullable();
            $table->string('principal_amount')->nullable();
            $table->string('days_to_pay')->nullable();
            $table->string('months_to_pay')->nullable();
            $table->string('interest')->nullable();
            $table->string('interest_amount')->nullable();
            $table->string('svc_charge')->nullable();
            $table->string('actual_record')->nullable();
            $table->string('payable_amount')->nullable();
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
