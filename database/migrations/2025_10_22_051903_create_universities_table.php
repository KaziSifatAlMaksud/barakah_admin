<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('university_name');
            $table->string('city')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->string('state')->nullable();
            $table->string('type')->nullable(); // e.g., Public or Private
            $table->text('remarks')->nullable();
            $table->boolean('status')->default(1); // 1 = Active, 0 = Inactive
            $table->timestamps();

            // Optional: Add foreign key if you have a countries table
            // $table->foreign('country_id')->references('id')->on('countries')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('universities');
    }
};
