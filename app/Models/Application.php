<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'name','email','phone','last_edu','cgpa','edu_year',
        'subject_study','degree_want','exam_type','score',
        'preferable_un','message','attachment_path'
    ];
}
