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
        Schema::create('loan_details', function (Blueprint $table) {
            $table->id();
            $table->string('loan_id')->nullable();//Lnkltranh_no
            $table->string('loan_day_no')->nullable();//ltrand_dayno
            $table->string('loan_due_date')->nullable();//ltrand_duedate
            $table->string('loan_due_amount')->nullable();//ltrand_dueamt
            $table->string('loan_date_paid')->nullable();//ltrand_datepaid
            $table->string('loan_amount_paid')->nullable();//ltrand_amtpaid
            $table->string('loan_running_balance')->nullable();//ltrand_runbal
            $table->string('user_id')->nullable();//ltrand_clctor
            $table->string('loan_bank')->nullable();//ltrand_bank
            $table->string('loan_check_no')->nullable();//ltrand_chkno
            $table->string('loan_remarks')->nullable();//ltrand_rem
            $table->string('loan_amount_tenderd')->nullable();//ltrand_amttend
            $table->string('loan_amount_change')->nullable();//ltrand_amtchange
            $table->string('loan_withdraw_from_bank')->nullable();//ltrand_withdrawn_frombank
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_details');
    }
};
