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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('m_name')->nullable();
            $table->string('l_name');
            $table->string('position_desired')->nullable();
            $table->string('present_address')->nullable();
            $table->string('provincial_address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('religion')->nullable();
            $table->string('age')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('f_spouse')->nullable();
            $table->string('m_spouse')->nullable();
            $table->string('l_spouse')->nullable();
            $table->string('child_1_name')->nullable();
            $table->string('child_1_age')->nullable();
            $table->string('child_2_name')->nullable();
            $table->string('child_2_age')->nullable();
            $table->string('child_3_name')->nullable();
            $table->string('child_3_age')->nullable();
            $table->string('m_maiden_f_name')->nullable();
            $table->string('m_maiden_m_name')->nullable();
            $table->string('m_maiden_l_name')->nullable();
            $table->string('m_occupation')->nullable();
            $table->string('m_phone')->nullable();
            $table->string('father_f_name')->nullable();
            $table->string('father_m_name')->nullable();
            $table->string('father_l_name')->nullable();
            $table->string('f_occupation')->nullable();
            $table->string('f_phone')->nullable();
            $table->string('emergency_name')->nullable();
            $table->string('emergency_address')->nullable();
            $table->string('emergency_phone')->nullable();
            $table->string('relationship')->nullable();
            $table->string('elementary')->nullable();
            $table->string('secondary')->nullable();
            $table->string('college')->nullable();
            $table->string('course')->nullable();
            $table->string('vocational')->nullable();
            $table->string('n_company_1')->nullable();
            $table->string('a_company_1')->nullable();
            $table->string('p_company_1')->nullable();
            $table->string('f_company_1')->nullable();
            $table->string('t_company_1')->nullable();
            $table->string('cf_name_1')->nullable();
            $table->string('cf_occ_1')->nullable();
            $table->string('cf_add_1')->nullable();
            $table->string('cf_phone_1')->nullable();
            $table->string('sss')->nullable();
            $table->string('pagibig')->nullable();
            $table->string('philhealth')->nullable();
            $table->string('tin')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
