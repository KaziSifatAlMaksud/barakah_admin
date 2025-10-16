<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191);
            $table->string('email', 255);
            $table->string('phone', 30)->nullable();
            $table->string('last_edu', 100)->nullable();
            $table->decimal('cgpa', 3, 2)->nullable(); // Example: 3.75
            $table->year('edu_year')->nullable();      // Example: 2023
            $table->string('subject_study', 150)->nullable();
            $table->string('degree_want', 100)->nullable();
            $table->string('exam_type', 50)->nullable();
            $table->string('score', 50)->nullable();
            $table->string('preferable_un', 255)->nullable();
            $table->text('message')->nullable();
            $table->string('attachment_path', 512)->nullable(); // PDF file path
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
