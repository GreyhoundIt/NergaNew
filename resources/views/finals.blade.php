
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?php echo View::make('partials.hero') ?>
            <div class="inner-content col-md-12">
                <h1>Finals Day</h1>
                <p>The rearranged 2017 Rabbits Finals day was held at the excellent Ramside Hall on Saturday 12/5/18. Full details of the Individual and Team event are included on the attached files.</p>
               <h3><a href="{{ url ('info/2017-Rabbits-INDIVIDUAL-Result.pdf') }}" target="_blank">Individual Results</a> </h3>
               <h3> <a href="{{ url ('info/2017-Rabbits-Finals-Day-Team-Result.pdf') }}" target="_blank">Team Results</a></h3>
                <h3><a href="{{ url ('info/2017-Rabbits-Finals Day-Team-Players-Result.pdf') }}" target="_blank">Team PlayerResults</a></h3>

                <h3><a href="{{ url ('https://www.dropbox.com/sh/2uh11bo6s2u3kgq/AACANyRtXA7M6DLuaLDv1vy5a?dl=0') }}" target="_blank">Photos from the day</a></h3></br>

                <h2>2018</h2>
                </br>
                <p>NERGA will host two separate Finals Days in 2018, with both events taking place at Ramside Hall.
                The 2018 Inter Finals day will take place on Saturday 6th October with the NERGA Finals Day taking place a week later on Saturday 13th October.</p>
                </div>
            <?php echo View::make('partials.footer') ?>
        </div>
    </div>
</div>
@endsection