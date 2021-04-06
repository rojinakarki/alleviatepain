<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_title',
        'course_description',
        'course_category',
        'course_type',
        'course_cost',
        'course_duration',
        'sets',
        'reps',
    ];


}
