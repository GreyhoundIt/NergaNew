<?php

namespace App\Http\Controllers;

use App\Club;
use App\Fixture;
use App\Zone;
use App\Http\Requests\TeamCreateRequest;
use App\TeamSheet;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserTeamSheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function createOrUpdate(Fixture $id)
    {
        if (Auth::check())
        {
            $userId = Auth::id();

            $fixtureId = $id->id;
            // The user is logged in...
            $teamSheet = DB::table('team_sheets')
                ->where('user_id', '=' , $userId)
                ->where('fixture_id', '=', $fixtureId)
                ->first();
            if(!$teamSheet){
                Session::put('fixtureId',[$fixtureId]);
                return redirect()->action('UserTeamSheetController@create');
            }
            else{
                $teamsheetId = $teamSheet->id;
                return redirect()->action(
                    'UserTeamSheetController@edit', ['id' => $teamsheetId]
                );
            }
        }
    }
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fixture = (Session('fixtureId'));
        $userid = Auth::id();
        $user = Auth::user();
        $clubid = $user->club_id;
        $club = Club::where('id', '=', $clubid)->first();
        return view('teamsheets.create')->withFixture($fixture)->withUserid($userid)->withClub($club);
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function store(TeamCreateRequest $request)
    {
        $input = $request->all();
        $fixture = Fixture::find($input['fixture_id']);
        TeamSheet::create($input);
        Session::forget('fixtureId');
        Session::flash('success', "Team successfully submitted");
        return redirect()->action( 'UserZoneController@show', ['id' => $fixture->zone_id]);
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
        $user = Auth::user();
        $teamsheet = TeamSheet::findOrFail($id);
        $clubid = $user->club_id;
        $club = Club::where('id', '=', $clubid)->first();
        return view('teamsheets.edit')->withTeamsheet($teamsheet)->withClub($club);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $teamsheet = TeamSheet::findOrFail($id);
        $input = $request->all();
        $fixture = Fixture::find($input['fixture_id']);
        $teamsheet->fill($input)->save();
        Session::flash('success', "Team successfully updated");
        return redirect()->action( 'UserZoneController@show', ['id' => $fixture->zone_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teamsheet = TeamSheet::findOrFail($id);
        $fixture =  Fixture::find($teamsheet->fixture_id);
        $teamsheet->delete();
        Session::flash('success', "Team entry deleted");
        return redirect()->action( 'UserZoneController@show', ['id' => $fixture->zone_id]);
    }
}
