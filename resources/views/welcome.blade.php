@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?php echo View::make('partials.hero') ?>
            <div class="inner-content col-md-12">
                <h1>Welcome to the NERGA- The North East Rabbits Golf Association</h1>
                <img src="/images/pic.jpg" class="leadpic" alt="North East Rabbits League Logo">
                <p>2018 NERGA (16 to 28 handicap) has 35 Clubs in 4 Zone Leagues. Over 550 players will compete as individuals and within their Club team for a place in the Finals Day at Ramside Hall in October 2018 to become 2017 NERGA Club and Individual Champions.</p>
                <p> In 2015 we launched a mid handicap league division – INTER (8 to 15 competition). In 2018 we have 27 Clubs formed into 3 Zone Leagues and they are competing for a place in the 2018 INTER Club & Individual Championship Finals day at Ramside Hall in October 2018</p>
                <p> TTo date we have grown year on year and our ambition is to continue this growth in the future. If you are a Club or a member interested in joining us 2018 then please contact our Secretary Mike Walke - <a href="mailto:mikewalke88@hotmail.com?subject=NERGA%20WEBSITE">mikewalke88@hotmail.com</a> or 01325 720943 for further information</p>

            </div>
            <?php echo View::make('partials.footer') ?>
        </div>
    </div>
</div>
@endsection
