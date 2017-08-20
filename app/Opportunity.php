<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    protected $fillable = [
        'start_time', 'end_time', 'event_day', 'volunteer_center_id',
    ];

    public function volunteer_center()
    {
        return $this->belongsTo(VolunteerCenter::class);
    }

    public function members()
    {
        return $this->belongsToMany(Member::class);
    }
}
