<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon;

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

    public function findMatch($opportunity, $member)
    {
        $opportunity_day = new Carbon($opportunity->event_day);
        foreach($member->schedules as $schedule)
        {
            if ($opportunity_day->dayOfWeek == $schedule->day_id)
            {
                $o_start = new Carbon($opportunity->start_time);
                $o_end = new Carbon($opportunity->end_time);
                $s_start = new Carbon($schedule->start_time);
                $s_end = new Carbon($schedule->end_time);
                if ($o_start->gte($s_start) && $o_end->lte($s_end))
                {
                    return $member;
                }
            }
        }
        return false;
    }
}
