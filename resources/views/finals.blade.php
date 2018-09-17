
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?php echo View::make('partials.hero') ?>
            <div class="inner-content col-md-12">
                <h1>Finals Day</h1>
                <p>NERGA will host two separate Finals Days in 2018, with both events taking place at Ramside Hall.<br/>The 2018 Inter Finals day will take place on Saturday 6th October with the NERGA Finals Day taking place a week later on Saturday 13th October.
                </p>
               <h3><a href="{{ url ('info/GeneralInfo2018.pdf') }}" target="_blank">Details of the arrangements for both events are included in the attached note.</a> </h3>
               <h3> <a href="{{ url ('info/FinalsDay2018IntersDraftStartSheet.pdf') }}" target="_blank">The draft start sheet for the Inter Finals Day on 6/10/18s</a></h3>
                <h3><a href="{{ url ('info/FinalsDay2018RabbitsDraftStartSheet.pdf') }}" target="_blank">The draft start sheet for the Rabbits Finals Day on 13/10/18</a></h3>
                <p>The Final start sheet will be available 5 days before the event.</p>
                </div>
            <?php echo View::make('partials.footer') ?>
        </div>
    </div>
</div>
@endsection