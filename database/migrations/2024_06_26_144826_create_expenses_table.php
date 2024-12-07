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
            $table->string('exp_ref_no')->nullable();
            $table->string('acc_no')->nullable();
            $table->string('acc_class')->nullable();
            $table->string('acc_type')->nullable();
            $table->string('acc_title')->nullable();
            $table->string('justification')->nullable();
            $table->string('or_no')->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->string('exp_date')->nullable();
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
