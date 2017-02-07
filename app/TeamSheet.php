<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamSheet extends Model
{
    protected $guarded = [];

    public function fixture()
    {
        return $this->belongsTo(Fixture::class);
    }

    public function user ()
    {
        return $this->belongsTo(User::class);
    }

    public function setP1FirstName($value)
    {
        $this->attributes['p1_first_name'] = title_case($value);
    }
}
