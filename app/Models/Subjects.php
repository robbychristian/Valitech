<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'subject_year',
        'subject_semester',
        'subject_name',
        'subject_code',
        'subject_price',
        'subject_lec_units',
        'subject_lab_units',
        'subject_prereq',
    ];
}
