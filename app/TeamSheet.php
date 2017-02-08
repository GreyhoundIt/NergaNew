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
    /* lets Title case everything */
    public function setP1FirstNameAttribute($value)
    {
        $this->attributes['p1_first_name'] = title_case($value);
    }

    public function setP2FirstNameAttribute($value)
    {
        $this->attributes['p2_first_name'] = title_case($value);
    }

    public function setP3FirstNameAttribute($value)
    {
        $this->attributes['p3_first_name'] = title_case($value);
    }
    public function setP4FirstNameAttribute($value)
    {
        $this->attributes['p4_first_name'] = title_case($value);
    }

    public function setP5FirstNameAttribute($value)
    {
        $this->attributes['p5_first_name'] = title_case($value);
    }

    public function setP6FirstNameAttribute($value)
    {
        $this->attributes['p6_first_name'] = title_case($value);
    }

    public function setP7FirstNameAttribute($value)
    {
        $this->attributes['p7_first_name'] = title_case($value);
    }

    public function setP8FirstNameAttribute($value)
    {
        $this->attributes['p8_first_name'] = title_case($value);
    }

    public function setG1FirstNameAttribute($value)
    {
        $this->attributes['g1_first_name'] = title_case($value);
    }

    public function setG2FirstNameAttribute($value)
    {
        $this->attributes['g2_first_name'] = title_case($value);
    }

    public function setP1LastNameAttribute($value)
    {
        $this->attributes['p1_last_name'] = title_case($value);
    }

    public function setP2LastNameAttribute($value)
    {
        $this->attributes['p2_last_name'] = title_case($value);
    }

    public function setP3LastNameAttribute($value)
    {
        $this->attributes['p3_last_name'] = title_case($value);
    }

    public function setP4LastNameAttribute($value)
    {
        $this->attributes['p4_last_name'] = title_case($value);
    }

    public function setP5LastNameAttribute($value)
    {
        $this->attributes['p5_last_name'] = title_case($value);
    }

    public function setP6LastNameAttribute($value)
    {
        $this->attributes['p6_last_name'] = title_case($value);
    }

    public function setP7LastNameAttribute($value)
    {
        $this->attributes['p7_last_name'] = title_case($value);
    }

    public function setP8LastNameAttribute($value)
    {
        $this->attributes['p8_last_name'] = title_case($value);
    }

    public function setG1LastNameAttribute($value)
    {
        $this->attributes['g1_last_name'] = title_case($value);
    }

    public function setG2LastNameAttribute($value)
    {
        $this->attributes['g2_last_name'] = title_case($value);
    }

}
