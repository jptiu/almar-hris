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
        Schema::table('customers', function (Blueprint $table) {
            $table->string('birth_date')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('facebook_name')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('spouse_number')->nullable();
            $table->string('spouse_age')->nullable();
            $table->string('spouse_bdate')->nullable();
            $table->string('spouse_fb')->nullable();
            $table->string('occupation')->nullable();
            $table->string('c_nameadd')->nullable();
            $table->string('agency_name')->nullable();
            $table->string('add_tel')->nullable();
            $table->string('add_telc')->nullable();
            $table->string('comp_name')->nullable();
            $table->string('day_off')->nullable();
            $table->string('monthly_salary')->nullable();
            $table->string('monthly_pension')->nullable();
            $table->string('pension_sched')->nullable();
            $table->string('pension_type')->nullable();
            $table->string('fathers_name')->nullable();
            $table->string('fathers_num')->nullable();
            $table->string('mothers_name')->nullable();
            $table->string('mothers_num')->nullable();
            $table->string('branch')->nullable();
            $table->string('card_no')->nullable();
            $table->string('acc_no')->nullable();
            $table->string('pin_no')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->string('birth_date')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('facebook_name')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('spouse_number')->nullable();
            $table->string('spouse_age')->nullable();
            $table->string('spouse_bdate')->nullable();
            $table->string('spouse_fb')->nullable();
            $table->string('occupation')->nullable();
            $table->string('c_nameadd')->nullable();
            $table->string('agency_name')->nullable();
            $table->string('add_tel')->nullable();
            $table->string('add_telc')->nullable();
            $table->string('comp_name')->nullable();
            $table->string('day_off')->nullable();
            $table->string('monthly_salary')->nullable();
            $table->string('monthly_pension')->nullable();
            $table->string('pension_sched')->nullable();
            $table->string('pension_type')->nullable();
            $table->string('fathers_name')->nullable();
            $table->string('fathers_num')->nullable();
            $table->string('mothers_name')->nullable();
            $table->string('mothers_num')->nullable();
            $table->string('branch')->nullable();
            $table->string('card_no')->nullable();
            $table->string('acc_no')->nullable();
            $table->string('pin_no')->nullable();
        });
    }
};
