<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    protected $fillable =['name', 'postcode', 'fixture_date', 'fixture_time', 'start_sheet_skeleton', 'start_sheet_official', 'team_overall', 'person_overall'];

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    public function teamSheets()
    {
        return $this->hasMany(TeamSheet::class);
    }
}
