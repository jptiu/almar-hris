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
            $table->increments('id');//ltranh_no
            $table->string('loan_type')->nullable();
            $table->string('transaction_type')->nullable();//ltranh_type
            $table->string('trans_no')->nullable();
            $table->string('date_of_loan')->nullable();//ltranh_date
            $table->integer('customer_id')->nullable();//ltranh_cus_id
            $table->string('customer_type')->nullable();
            $table->string('status')->nullable();//ltranh_stat
            $table->string('transaction_customer_status')->nullable();//ltranh_cus_stat
            $table->string('transaction_customer_status_date')->nullable();//ltranh_cus_stat_dt
            $table->string('transaction_with_collateral')->nullable();//ltranh_wcolat
            $table->string('transaction_with_cert')->nullable();//ltranh_wcert
            $table->string('principal_amount')->nullable();//ltranh_amt
            $table->string('days_to_pay')->nullable();//ltranh_terms_day
            $table->string('months_to_pay')->nullable();//ltranh_terms_mon
            $table->string('interest')->nullable();//ltranh_intrate
            $table->string('interest_amount')->nullable();//
            $table->string('svc_charge')->nullable();
            $table->string('actual_record')->nullable();
            $table->string('payable_amount')->nullable();//ltranh_actrcvd
            $table->string('user_id')->nullable();//ltranh_uid
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
