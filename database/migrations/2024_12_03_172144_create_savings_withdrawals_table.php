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
        Schema::create('savings_withdrawals', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('tran_id')->nullable();
            $table->string('tran_date')->nullable();
            $table->string('amount')->nullable();
            $table->string('status')->nullable();
            $table->string('interest_rate')->nullable();
            $table->string('interest_amount')->nullable();
            $table->string('net_amount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('savings_withdrawals');
    }
};
