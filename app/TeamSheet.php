<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamSheet extends Model
{
    public function fixture()
    {
        return $this->belongsTo(Fixture::class);
    }

    public function user ()
    {
        return $this->belongsTo(User::class);
    }
}
