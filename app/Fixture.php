<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Http\Requests;

class Fixture extends Model
{
    protected $fillable =['name', 'zone_id', 'postcode', 'fixture_date', 'fixture_time', 'start_sheet_skeleton', 'start_sheet_official', 'team_overall', 'person_overall'];
    protected $dates = ['fixture_date'];

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    public function teamSheets()
    {
        return $this->hasMany(TeamSheet::class);
    }

    public function handelFileUploads(Requests\FixtureUpdateRequest $request, Fixture $fixture, $name)
    {
        //get the old record
        $oldData = $fixture->$name;
        if ($request->file($name)) {
            $file = $request->file($name);
            //Move Uploaded File
            $destinationPath = $fixture->zone->league->name . '/' . $fixture->zone->name . '/' . $fixture->name . '/';
            $destinationPath = strtolower($destinationPath);
            //Convert whitespaces and underscore to dash
            $destinationPath = preg_replace("/[\s_]/", "-", $destinationPath);
            $fileName = $file->getClientOriginalName();
            $fileName = time() . preg_replace("/[\s_]/", "-", $fileName);
            $file->move($destinationPath, $fileName);
            $path = $destinationPath . $fileName;
            //Todo tweat that a file has been updated.
            return $path;
        } else {
            return $oldData;
        }
    }


}
