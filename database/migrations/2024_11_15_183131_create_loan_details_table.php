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
            $table->decimal('loan_due_amount', 10, 2)->nullable();//ltrand_dueamt
            $table->string('loan_date_paid')->nullable();//ltrand_datepaid
            $table->decimal('loan_amount_paid', 10, 2)->nullable();//ltrand_amtpaid
            $table->decimal('loan_running_balance', 10, 2)->nullable();//ltrand_runbal
            $table->string('user_id')->nullable();//ltrand_clctor
            $table->string('loan_bank')->nullable();//ltrand_bank
            $table->string('loan_check_no')->nullable();//ltrand_chkno
            $table->string('loan_remarks')->nullable();//ltrand_rem
            $table->decimal('loan_amount_tenderd', 10, 2)->nullable();//ltrand_amttend
            $table->decimal('loan_amount_change', 10, 2)->nullable();//ltrand_amtchange
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
