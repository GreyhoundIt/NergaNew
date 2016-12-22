<?php

namespace App\Http\Controllers;

use App\Fixture;
use App\Zone;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use App\Helpers\FileHelper;

class FixtureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fixtures = Fixture::all();
        return view('fixtures.index')->withFixtures($fixtures);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zones = Zone::pluck('name','id');
        return view('fixtures.create')->withZones($zones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Fixture $fixture)
    {
        $fixture = $request->all();
        Fixture::create($fixture);
        return redirect()->route('admin.fixture.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fixture = Fixture::findOrFail($id);
        $zones = Zone::pluck('name','id');
        return view('fixtures.edit')->withFixture($fixture)->withZones($zones);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\FixtureUpdateRequest $request, $id)
    {
        $fixture = Fixture::findOrFail($id);
        $input = $request->all();
        //if there is a file then skeleton start sheet
        $input['start_sheet_skeleton'] =  $fixture->handelFileUploads($request, $fixture, "start_sheet_skeleton");
        $input['start_sheet_official'] =  $fixture->handelFileUploads($request, $fixture, "start_sheet_official");
        $input['team_overall'] =  $fixture->handelFileUploads($request, $fixture, "team_overall");
        $input['person_overall'] =  $fixture->handelFileUploads($request, $fixture, "person_overall");
        $fixture->fill($input)->save();
        //Todo add flash message
        return redirect()->route('admin.zone.edit',$fixture->zone->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fixture = Fixture::findOrFail($id);
        $fixture->delete();
        return redirect()->route('admin.fixture.index');
    }





}
