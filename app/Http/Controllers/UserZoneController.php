<?php

namespace App\Http\Controllers;

use App\Club;
use App\Fixture;
use App\Zone;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Cmfcmf\OpenWeatherMap;

use App\Http\Requests;

class UserZoneController extends Controller
{
    public function show($id)
    {
        $zone = Zone::findOrFail($id);
        $fixtures = $zone->fixtures;
        $fixtures = $fixtures->sortBy('fixture_date');
       // $next = $fixtures->where('fixture_date', '>', Carbon::now());

        $next = $fixtures->filter(function ($fixture) {
            return $fixture['fixture_date'] > Carbon::now();
        });
      //  dd($next);
        $next = $next->first();

        $forecast = $this->getFixtureWeather($next->club->post_code);

       // dd($forecast);

        $fortnight = Fixture::where('zone_id', '=' ,$id)
            ->where('fixture_date', '>' , Carbon::now())
            ->where('fixture_date', '<' , Carbon::now()->addDays(14))
            ->get()->last();


        $userzone = [];
        if (Auth::user()) {
            $club_id = Auth::user()->club_id;
            $userFixtures = DB::table('fixtures')
                ->where('club_id', '=' , $club_id)
                ->get();
            foreach ($userFixtures as $userFixture){
                $userzone [] = $userFixture->zone_id;
            }
        }
        return view('zone.show')->withZone($zone)->withFixtures($fixtures)->withNext($next)->withUserzone($userzone)->withForecast($forecast)->withFortnight($fortnight);
    }

    public function getFixtureWeather($location)
    {
        // Language of data (try your own language here!):
        $lang = 'en';

        // Units (can be 'metric' or 'imperial' [default]):
        $units = 'metric';
        // Get OpenWeatherMap object. Don't use caching (take a look into Example_Cache.php to see how it works).
        $owm = new OpenWeatherMap("90d625c068e3f3d7818b9e4237871e21");
        $forecast = $owm->getDailyWeatherForecast($location, $units, $lang, '90d625c068e3f3d7818b9e4237871e21', 5);
        return $forecast;
    }



}
