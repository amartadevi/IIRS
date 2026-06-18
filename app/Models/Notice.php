<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table = 'notices';

    protected $fillable = [
        'title',
        'content',
        'link',
        'date',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}
