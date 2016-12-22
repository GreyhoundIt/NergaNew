<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreZoneRequest;
use App\League;
use App\Zone;
use Illuminate\Http\Request;

use App\Http\Requests;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zones = Zone::all();
        return view('zones.index')->withZones($zones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $leagues = League::pluck('name','id');
        return view('zones.create')->withLeagues($leagues);
    }


    /**
     * @param StoreZoneRequest $request
     * @param Zone $zone
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreZoneRequest $request, Zone $zone)
    {
        $zone = $request->all();
        Zone::create($zone);
        return redirect()->route('admin.zone.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('admin.zone.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $zone = Zone::findOrFail($id);
        $leagues = League::pluck('name','id');
        return view('zones.edit')->withZone($zone)->withLeagues($leagues);
    }


    /**
     * @param StoreZoneRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Requests\ZoneUpdateRequest $request, $id)
    {
        $zone = Zone::findOrFail($id);
        $input = $request->all();

        //Work with files
        $input['team_overall'] =  $zone->handelFileUploads($request, $zone, "team_overall");
        $input['person_overall'] =  $zone->handelFileUploads($request, $zone, "person_overall");

        $zone->fill($input)->save();
        return redirect()->route('admin.zone.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $zone = Zone::findOrFail($id);
        $zone->delete();
        return redirect()->route('admin.zone.index');
    }
}
