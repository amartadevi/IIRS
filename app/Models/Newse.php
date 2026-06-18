<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newse extends Model
{
    protected $table = 'newses';

    protected $fillable = [
        'title',
        'type',
        'excerpt',
        'description',
        'photo',
        'date',
        'gallery',
    ];

    protected $casts = [
        'date' => 'date',
        'gallery' => 'array',
    ];
}
