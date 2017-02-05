<?php

namespace App\Http\Controllers;

use App\Club;
use App\Zone;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $next = $next->first();

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
        return view('zone.show')->withZone($zone)->withFixtures($fixtures)->withNext($next)->withUserzone($userzone);
    }

}
