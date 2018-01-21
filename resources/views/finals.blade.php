
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?php echo View::make('partials.hero') ?>
            <div class="inner-content col-md-12">
                <h1>Finals Day</h1>
                <img src="/images/Woodham.jpg" class="center-block leadpic" alt="North East Rabbits League Logo">
               <p> The 2017 NERGA Finals Day had to be postponed due to inclement weather and has been rearranged for Saturday 31st Match at Ramside Hall.</p>
                <p>NERGA will host two separate Finals Days in 2018, with both events taking place at Ramside Hall.
                The 2018 Inter Finals day will take place on Saturday 6h October with the NERGA Finals Day taking place a week later on Saturday 13th October.</p>
                </div>
            <?php echo View::make('partials.footer') ?>
        </div>
    </div>
</div>
@endsection