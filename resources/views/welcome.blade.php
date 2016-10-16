@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?php echo View::make('partials.hero') ?>
            <div class="inner-content col-md-12">
                <h1>Welcome to the NERGA- The North East Rabbits Golf Association</h1>
                <img src="/images/pic.jpg" class="leadpic" alt="North East Rabbits League Logo">
                <p>2016 NERGA (16 to 28 handicap) has grown to 35 Clubs in 4 Zone Leagues. Over 500 players will compete as individuals and within their Club team for a place in the Finals Day at Rockliffe Hall in October to become 2016 NERGA Club and Individual
                    Champions.</p>
                <p> From the sucuss of NERGA in 2015 we launched a mid handicap league division – INTER (8 to 15 competition . 2016 we have grown to 21 Clubs formed into 3 Zone Leagues and they are competing for a place in the 2016 INTER Club &amp; Individual
                    Championship Finals day at Rockliffe Hall.</p>
                <p> Todate we have grown year on year and our ambition is to continue this growth in the future. If you are a Club or a member interested in joining us 2017 then please contact our Secretary Martin Hill –

                    <a href="mailto:martin_hill@live.co.uk?subject=NERGA%20WEBSITE">martin_hill@live.co.uk</a> or 01325 720943 for further information</p>

            </div>
            <?php echo View::make('partials.footer') ?>
        </div>
    </div>
</div>
@endsection
