<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VolunteerCenter extends Model
{
    protected $fillable = [
        'name', 'street', 'city', 'state', 'zipcode', 'organization', 'description',
    ];

    public function opportunities()
    {
        return $this->hasMany(Opportunity::class);
    }
}
