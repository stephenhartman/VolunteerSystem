<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmergencyContact extends Model
{

    protected $fillable = [
        'first_name', 'last_name', 'email', 'home_phone', 'work_phone', 'cell phone', 'street', 'city', 'state', 'zipcode', 'member_id',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
