<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    public function zones()
    {
        return $this->hasMany(Zone::class);
    }
}
