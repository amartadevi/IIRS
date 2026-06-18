<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $primaryKey = 'eventid';

    protected $fillable = [
        'eventtitle',
        'description',
        'image',
        'eventdate',
        'completed',
    ];

    protected $casts = [
        'eventdate' => 'date',
        'completed' => 'integer',
    ];

    /**
     * Get the event title (aliased to title).
     */
    public function getTitleAttribute()
    {
        return $this->eventtitle;
    }

    /**
     * Get the event date (aliased to date).
     */
    public function getDateAttribute()
    {
        return $this->eventdate;
    }
}
