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

    public function findMatch($opportunity, $member)
    {
        foreach($member->schedules as $schedule)
        {
            $opportunity_day = new Carbon($opportunity->event_day);
            if ($opportunity_day->dayOfWeek == $schedule->day_id)
            {
                $o_start = new Carbon($opportunity->start_time);
                $o_end = new Carbon($opportunity->end_time);
                $s_start = new Carbon($schedule->start_time);
                $s_end = new Carbon($schedule->end_time);
                if ($o_start->gte($s_start) && $o_end->lte($s_end))
                {
                    return $opportunity;
                }
            }
        }
        return false;
    }
}
