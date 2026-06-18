<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'programs';

    protected $fillable = [
        'name',
        'duration',
        'credits',
        'description',
        'mission',
        'objectives',
        'image',
    ];
}
