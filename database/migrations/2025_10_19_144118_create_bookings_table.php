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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id()->comment('Primary key');

            // Personal Information
            $table->string('full_name')->comment('Traveler full name');
            $table->string('passport_number')->nullable()->comment('Traveler passport number');
            $table->string('nid_number')->nullable()->comment('Traveler national ID number');
            $table->string('email')->nullable()->comment('Traveler email address');
            $table->string('whatsapp')->nullable()->comment('Traveler WhatsApp number');

            // File Uploads
            $table->string('nid_file')->nullable()->comment('Path to uploaded NID file (PDF or Image)');
            $table->string('passport_file')->nullable()->comment('Path to uploaded passport file (PDF or Image)');

            // Travel Details
            $table->string('departure_city')->nullable()->comment('Preferred departure city');
            $table->string('destination_city')->nullable()->comment('Destination city');
            $table->date('departure_date')->nullable()->comment('Preferred departure date');
            $table->date('return_date')->nullable()->comment('Preferred return date (if round-trip)');
            $table->enum('trip_type', ['one-way', 'round-trip'])->default('one-way')->comment('Type of trip');
            $table->string('preferred_airline')->nullable()->comment('Preferred airline name');

            // Additional Information
            $table->enum('baggage_support', ['Yes', 'No'])->default('No')->comment('Whether traveler needs baggage support');
            $table->enum('travel_group', ['Alone', 'Group'])->default('Alone')->comment('Whether traveler is alone or in a group');
            $table->text('special_requests')->nullable()->comment('Any special requests or notes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
