<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('exp_ref_no');
            $table->string('acc_no');
            $table->string('acc_class');
            $table->string('acc_type');
            $table->string('acc_title');
            $table->string('justification');
            $table->string('or_no');
            $table->string('amount');
            $table->string('exp_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
