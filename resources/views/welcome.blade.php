@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?php echo View::make('partials.hero') ?>
            <div class="inner-content col-md-12">
                <h1>Welcome to the NERGA- The North East Rabbits Golf Association</h1>
                <img src="/images/pic.jpg" class="leadpic" alt="North East Rabbits League Logo">
                <p>2017 NERGA (16 to 28 handicap) has 34 Clubs in 4 Zone Leagues. Over 500 players will compete as individuals and within their Club team for a place in the Finals Day at Woodham Golf & Country Club in September to become 2017 NERGA Club and Individual Champions.</p>
                <p> In 2015 we launched a mid handicap league division – INTER (8 to 15 competition). In 2017 we have 21 Clubs formed into 3 Zone Leagues and they are competing for a place in the 2017 INTER Club & Individual Championship Finals day at Woodham Golf & Country Club in September.</p>
                <p> To date we have grown year on year and our ambition is to continue this growth in the future. If you are a Club or a member interested in joining us 2018 then please contact our Secretary Martin Hill –

                    <a href="mailto:martin_hill@live.co.uk?subject=NERGA%20WEBSITE">martin_hill@live.co.uk</a> or 01325 720943 for further information</p>

            </div>
            <?php echo View::make('partials.footer') ?>
        </div>
    </div>
</div>
@endsection
