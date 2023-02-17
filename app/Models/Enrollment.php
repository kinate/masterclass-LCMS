<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'course',
        'applicant_name',
        'phone',
        'email',
        'university',
        'university_course',
        'year',
        'total_fee',
        'paid_amount',
        'status',
        'comment',
    ];
}
