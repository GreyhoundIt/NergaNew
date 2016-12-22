<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests;

class Zone extends Model
{

    protected $fillable =['name','league_id', 'team_overall', 'person_overall'];

    public function league()
    {
        return $this->belongsTo(League::class);
    }

    public function fixtures()
    {
        return $this->hasMany(Fixture::class);
    }

    public function handelFileUploads(Requests\ZoneUpdateRequest $request, Zone $zone, $name)
    {
        //get the old record

        $oldData = $zone->$name;
        if ($request->file($name)) {
            $file = $request->file($name);
            //Move Uploaded File
            $destinationPath = $zone->league->name . '/' . $zone->name . '/Overall/';
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
