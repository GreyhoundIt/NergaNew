@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?php echo View::make('partials.hero') ?>
            <div class="inner-content col-md-12">
                <h1>Welcome to the NERGA- The North East Rabbits Golf Association</h1>
                <img src="/images/pic.jpg" class="leadpic" alt="North East Rabbits League Logo">
                <p>2018 NERGA (16 to 28 handicap) has 35 Clubs in 4 divided into four zones. Over 550 players will compete as individuals and within their Club team for a place in Finals Day at Ramside Hall in October to become NERGA Club and Individual Champions.</p>
                <p> In 2015 we launched a mid-handicap league – INTER (8 to 15 handicap). For 2018 there are 27 Clubs divided into three zones; all are competing for a place in the Finals day at Ramside Hall in October</p>
                <p> If you are a Club interested in joining us 2019 then please contact our Secretary Mike Walke - <a href="mailto:mikewalke88@hotmail.com?subject=NERGA%20WEBSITE">mikewalke88@hotmail.com</a> or 07887 520467 for further information.</p>

            </div>
            <?php echo View::make('partials.footer') ?>
        </div>
    </div>
</div>
@endsection
