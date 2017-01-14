<?php

namespace App\Http\Controllers;

use App\Zone;
use Carbon\Carbon;
use Illuminate\Http\Request;

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


        return view('zone.show')->withZone($zone)->withFixtures($fixtures)->withNext($next);
    }

}
