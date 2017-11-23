
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?php echo View::make('partials.hero') ?>
            <div class="inner-content col-md-12">
                <h1>Finals Day</h1>
                <img src="/images/Woodham.jpg" class="center-block leadpic" alt="North East Rabbits League Logo">
               <p> The 2107 Rabbits Finals Day had to be postponed due to inclement weather and has been rearranged for Saturday 31/3/18 at Ramside Hall.</p>
                <p>NERGA will host two separate Finals Days for 2018, with both events taking place at Ramside Hall
                The 2018 Inter Finals day will take place on Saturday 6/10/18 with the Rabbits Finals Day taking place a week later on Saturday 13/10/18.</p>
                </div>
            <?php echo View::make('partials.footer') ?>
        </div>
    </div>
</div>
@endsection