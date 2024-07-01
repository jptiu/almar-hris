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
            $table->string('full_name');
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
            $table->string('name_of_spouse')->nullable();
            $table->string('number_of_children')->nullable();
            $table->string('mothers_maiden_name')->nullable();
            $table->string('m_occupation')->nullable();
            $table->string('fathers_maiden_name')->nullable();
            $table->string('f_occupation')->nullable();
            $table->string('person_emergency')->nullable();
            $table->string('relationship')->nullable();
            $table->string('elementary')->nullable();
            $table->string('secondary')->nullable();
            $table->string('college')->nullable();
            $table->string('course')->nullable();
            $table->string('vocational')->nullable();
            $table->string('employment_history')->default('[]');
            $table->string('character_reference')->default('[]');
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
