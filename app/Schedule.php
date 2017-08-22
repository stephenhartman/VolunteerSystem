<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'start_time', 'end_time', 'notes', 'member_id', 'day_id',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
