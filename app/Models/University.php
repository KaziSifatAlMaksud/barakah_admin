<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $fillable = [
        'university_name',
        'city',
        'country_id',
        'state',
        'type',
        'remarks',
        'status',
    ];

    // Example relationship (if you have a Country model)
    // public function country()
    // {
    //     return $this->belongsTo(Country::class);
    // }
}
