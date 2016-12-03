<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    //
    public function league()
    {
        return $this->belongsTo(League::class);
    }

    public function fixtures()
    {
        return $this->hasMany(Fixture::class);
    }
}
