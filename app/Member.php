<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'street', 'city', 'state', 'zipcode', 'home_phone', 'work_phone', 'cell_phone', 'drivers_license', 'ss_card', 'approval_status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function emergency_contacts()
    {
        return $this->hasMany(EmergencyContact::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function opportunities()
    {
        return $this->belongsToMany(Opportunity::class);
    }

    public function interests()
    {
        return $this->hasMany(Interests::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
