<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests;
use Thujohn\Twitter\Facades\Twitter;
use GrahamCampbell\Flysystem\Facades\Flysystem;


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
            $stream = fopen($file->getRealPath(), 'r+');


            Flysystem::connection('awss3')->writeStream($destinationPath . "/" . $fileName, $stream, ['visibility' => 'public']);
            $path = $destinationPath . $fileName;
            // tweat that a file has been updated.
           // $this->sendZoneUpdateTweet($zone, $name);
            return $path;
        } else {
            return $oldData;
        }
    }

    public function sendZoneUpdateTweet($zone, $name)
    {
        $league = ucwords(strtolower($zone->league->name));
        $zoneName = ucwords(strtolower($zone->name));

        if($name == 'team_overall'){
            $msg = $league . ' League ' . $zoneName . ' Zone ' . ': Overall Team Results have now been updated on the website. #NERGA #RabbitsGolf';
            Twitter::postTweet(['status' => $msg , 'format' => 'json']);
        }
        if($name == 'person_overall'){
            $msg = $league . ' League ' . $zoneName . ' Zone ' . ': Overall Individual Results have now been updated on the website. #NERGA #RabbitsGolf';
            Twitter::postTweet(['status' => $msg , 'format' => 'json']);
        }
    }




}
