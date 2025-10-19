<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'passport_number',
        'nid_number',
        'email',
        'whatsapp',
        'nid_file',
        'passport_file',
        'departure_city',
        'destination_city',
        'departure_date',
        'return_date',
        'trip_type',
        'preferred_airline',
        'baggage_support',
        'travel_group',
        'special_requests',
    ];

    protected $casts = [
        'departure_date' => 'date',
        'return_date' => 'date',
    ];
}
