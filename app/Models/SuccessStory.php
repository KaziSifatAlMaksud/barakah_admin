<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuccessStory extends Model
{
    use HasFactory;

    protected $table = 'success_storys';

    protected $fillable = [
        'name',
        'department',
        'img',
        'university_name',
        'scholarship',
        'CGPA',
        'country',
        'achivement',
        'relocated',
    ];
}
