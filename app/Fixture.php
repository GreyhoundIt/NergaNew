<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Filesystem;
use League\Flysystem\FilesystemInterface;
use Thujohn\Twitter\Facades\Twitter;
use GrahamCampbell\Flysystem\Facades\Flysystem;



class Fixture extends Model
{
    protected $fillable =['zone_id', 'club_id', 'fixture_date', 'fixture_time', 'bye_team','start_sheet_skeleton', 'start_sheet_official', 'team_overall', 'person_overall'];
    protected $dates = ['fixture_date'];

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    public function club()
    {
        return $this->belongsTo(Club::class);
    }



    public function teamSheets()
    {
        return $this->hasMany(TeamSheet::class);
    }

    public function handelFileUploads(Requests\FixtureUpdateRequest $request, Fixture $fixture, $name)
    {
        //get the old record
        Print_r($request); die();
        $oldData = $fixture->$name;
        if ($request->file($name)) {
            $file = $request->file($name);
            //set paths
            if(($name == 'start_sheet_skeleton')||($name == 'start_sheet_official')){
                $destinationPath = $fixture->zone->league->name . '/' . $fixture->zone->name . '/' . $fixture->id . '/startsheets/' ;
                $destinationPath = strtolower($destinationPath);
                //Convert whitespaces and underscore to dash
                $destinationPath = preg_replace("/[\s_]/", "-", $destinationPath);
            }else{
                $destinationPath = $fixture->zone->league->name . '/' . $fixture->zone->name . '/' . $fixture->id . '/results/';
                $destinationPath = strtolower($destinationPath);
                //Convert whitespaces and underscore to dash
                $destinationPath = preg_replace("/[\s_]/", "-", $destinationPath);
            }
            //Move Uploaded File
            $fileName = $file->getClientOriginalName();
            $fileName = time() . '-' .preg_replace("/[\s_]/", "-", $fileName);
            $stream = fopen($file->getRealPath(), 'r+');

            Flysystem::connection('awss3')->writeStream($destinationPath . "/" . $fileName, $stream, ['visibility' => 'public']);
           // $file->move($destinationPath, $fileName);
            $path = $destinationPath . $fileName;
            // tweet that a file has been updated.
            // $this->sendFixtureUpdateTweet($fixture, $name);
            return $path;
        } else {
            return $oldData;
        }
    }

    public function sendFixtureUpdateTweet($fixture, $name)
    {
        $league = ucwords(strtolower($fixture->zone->league->name));
        $zone = ucwords(strtolower($fixture->zone->name));
        $fixtureName = ucwords(strtolower($fixture->name));
        if($name == 'start_sheet_skeleton'){
            $msg = $league . ' League ' . $zone . ' Zone ' . $fixtureName .': Initial Start Sheet has been updated. #NERGA #RabbitsGolf ';
            Twitter::postTweet(['status' => $msg , 'format' => 'json']);
        }
        if($name == 'start_sheet_official'){
            $msg = $league . ' League ' . $zone . ' Zone ' .  $fixtureName . ': Official Start Sheet has been updated. #NERGA #RabbitsGolf';
            Twitter::postTweet(['status' => $msg , 'format' => 'json']);
        }
        if($name == 'team_overall'){
            $msg = $league . ' League ' . $zone . ' Zone ' . $fixtureName .': Team Results have now been updated on the website. #NERGA #RabbitsGolf';
            Twitter::postTweet(['status' => $msg , 'format' => 'json']);
        }
        if($name == 'person_overall'){
            $msg = $league . ' League ' . $zone . ' Zone ' . $fixtureName . ': Individual Results have now been updated on the website. #NERGA #RabbitsGolf';
            Twitter::postTweet(['status' => $msg , 'format' => 'json']);
        }
    }

    public static function fixtureClosingTime($fixture)
    {
       if($fixture) {
           $fixtureDate = $fixture->fixture_date;
           return $fixtureDate->modify('-3 days 19:00');
       }
    }

    public static function fixtureOpeningTime($fixture)
    {
        if($fixture) {
            $fixtureDate = $fixture->fixture_date;
            return $fixtureDate->modify('-14 days 00:00');
        }
    }

}
