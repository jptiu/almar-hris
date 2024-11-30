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
        Schema::create('branchinfos', function (Blueprint $table) {
            $table->id();
            $table->longText('image')->nullable();
            $table->string('company_name');
            $table->string('address')->nullable();
            $table->string('tel_no')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branchinfos');
    }
};
