<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('success_storys', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('department')->nullable();
            $table->string('university_name')->nullable();
            $table->string('scholarship')->nullable();
            $table->decimal('CGPA', 3, 2)->nullable();
            $table->string('country')->nullable();
            $table->text('achivement')->nullable();
            $table->string('img')->nullable();
            $table->boolean('relocated')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('success_storys');
    }
};
