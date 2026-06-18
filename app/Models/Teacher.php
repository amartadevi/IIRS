<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';

    protected $fillable = [
        'name',
        'designation',
        'photo',
        'category',
        'sort_order',
        'qualifications',
        'description',
        'current_positions',
        'education',
        'experience',
        'publications',
        'awards',
        'email',
        'contact_number',
        'code',
        'department',
    ];
}
