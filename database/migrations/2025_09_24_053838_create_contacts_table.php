<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20)->nullable();   // max 20, nullable
            $table->string('email')->nullable(false); // required
            $table->string('phone')->nullable(false); // required
            $table->string('project_option')->nullable(); // optional
            $table->string('subject'); // required
            $table->text('message');   // required
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
