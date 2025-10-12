<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('country', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();          // Full country name
            $table->string('short_form', 10)->unique(); // e.g., "BD", "US"
            $table->string('region')->nullable();      // e.g., "Asia", "Europe"
            $table->string('currency')->nullable();    // e.g., "BDT", "USD"
            $table->string('bg_img')->nullable();
            $table->string('status')->default('active'); // e.g., "active", "inactive"
            $table->string('flag_icon')->nullable(); // URL or path to flag icon   
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('country');
    }
};
