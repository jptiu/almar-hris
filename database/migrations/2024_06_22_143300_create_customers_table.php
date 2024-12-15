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
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('house')->nullable();
            $table->string('street')->nullable();
            $table->integer('barangay')->nullable();
            $table->integer('city')->nullable();
            $table->string('job_position')->nullable();
            $table->string('salary_sched')->nullable();
            $table->string('tel_number')->nullable();
            $table->string('cell_number')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
