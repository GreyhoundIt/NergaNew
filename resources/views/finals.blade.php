
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?php echo View::make('partials.hero') ?>
            <div class="inner-content col-md-12">
                <h1>Finals Day</h1>
                <img src="/images/Woodham.jpg" class="center-block leadpic" alt="North East Rabbits League Logo">
                <p>NERGA will host two separate Finals Days for 2017, with both events taking place at <a href="http://www.woodhamgolfandcountryclub.co.uk/" target="_blank">Woodham Golf and Country Club</a></p>
                <p>The 2017 Inter Finals day will take place on Saturday 23/9/17 with the Rabbits Finals Day taking place a week later on Saturday 30/9/17.</p>
                <h3 class="padding-left"> <i class="fa fa-list-ol" aria-hidden="true"></i> <a href="https://s3.eu-west-2.amazonaws.com/nerga/finalsday/2017+Finals+Day+Rabbits+Start+sheet+v2.pdf" target="_blank">Rabbits Start Sheet</a></h3>
                <ul>
                    <li><a href="https://s3.eu-west-2.amazonaws.com/nerga/finalsday/Screen+Shot+2017-10-03+at+21.25.23.png" target="_blank">Raffle Prizes</a></li>
                    <li><a href="https://s3.eu-west-2.amazonaws.com/nerga/finalsday/General+Info+v2.pdf" target="_blank">General Information</a></li>
                    <li><a href="https://s3.eu-west-2.amazonaws.com/nerga/finalsday/2017+Finals+Day+Inter+All+++Players.pdf" target="_blank">List of all Inter Players</a></li>
                    <li><a href="https://s3.eu-west-2.amazonaws.com/nerga/finalsday/2017+Finals+Day+Qualifying+Inter+++Players.pdf" target="_blank">List of Qualified Inter players</a></li>
                    <li><a href="https://s3.eu-west-2.amazonaws.com/nerga/finalsday/NERGa+Finals+Day+2017+-+Qualifying++Clubs.pdf">List of Inter qualified clubs</a></li>
                </ul>
                <ul>
                    <li><a href="https://s3.eu-west-2.amazonaws.com/nerga/finalsday/List+of+all+Rabbit+Players.pdf" target="_blank">List of all Rabbit Players</a></li>
                    <li><a href="https://s3.eu-west-2.amazonaws.com/nerga/finalsday/All+Qualifiers+Rabbit+Players.pdf" target="_blank">List of Qualified Rabbit players</a></li>
                    <li><a href="https://s3.eu-west-2.amazonaws.com/nerga/finalsday/List+of+Rabbits+Team+++++qualifiers.pdf">List of Rabbit qualified clubs</a></li>
                </ul>

            </div>
                <div class="inner-content col-md-12">
                    <div class="col-md-6">
                        <h3 class="padding-left">INTER Results</h3>
                        <ul>
                            <li><a href="https://s3.eu-west-2.amazonaws.com/nerga/finalsday/2017+Inter+INDIVIDUAL+Result.pdf" target="_blank">Individual Competition Results</a></li>
                            <li><a href="https://s3.eu-west-2.amazonaws.com/nerga/finalsday/2017+Inter+Team+Event+-+Results+-+++Players.pdf" target="_blank">Team Event Player Results</a></li>
                            <li><a href="https://s3.eu-west-2.amazonaws.com/nerga/finalsday/2017+Inter+Team+Event+-+Results+-++Points.pdf" target="_blank">Team Event Team Results</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            <?php echo View::make('partials.footer') ?>
        </div>
    </div>
</div>
@endsection