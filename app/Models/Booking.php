<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'parent_name',
        'email',
        'phone',
        'child_name',
        'age',
        'classlevel',
        'time_schedule',
        'subject',
        'lesson_needs'
    ];
}

