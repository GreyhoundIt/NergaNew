<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Club;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('auth', ['only' => ['']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function rules()
    {
        return view('rules');
    }

    public function honours()
    {
        return view('honours');
    }

    public function sponsors()
    {
        return view('sponsors');
    }

    public function finals()
    {
        return view('finals');
    }

    public function links()
    {
        $clubs = Club::orderBy('name', 'asc')->get();
        return view('links')->withClubs($clubs);
    }

}
