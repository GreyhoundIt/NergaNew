
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?php echo View::make('partials.hero') ?>
            <div class="inner-content col-md-12">
                <h1>Rearranged - NERGA Rabbits Finals Day</h1>
                <img src="/images/Woodham.jpg" class="center-block leadpic" alt="North East Rabbits League Logo">
               <p>Due to inclement weather, the 2017 Rabbits Finals day, scheduled for Woodham was cancelled, and
                   the rearranged Finals day has been arranged for Saturday 31st March 2018 at Ramside Hall (Prince
                   Bishop course).</p>
                <p>There is no change to the players and teams invited to the re-arranged event. Full details on the
                start sheet below.</p>
                <h3><a href="{{ url ('info/startv3.pdf') }}" target="_blank">Start Sheet</a></h3>

                <p>The following should be noted.</br></br>
                <b>Cost</b> - £20 per player to be paid at Registration desk on the day.</br></br>
                <b>Registration</b> – The Registration desk will be situated in the Clubhouse. Please arrive at least 45 min
                before your scheduled tee time to allow plenty of time for refreshments, putting practice and
                walking to the 1st tee.</br></br>
                <b>Start time</b> - The 1st group will tee off at 9:00</br></br>
               <b> Refreshments</b> – Bacon sandwich and Coffee prior to the round and a 2-course meal is included in
                the entry fee.</br></br>
                <b>Order of play</b> - Player competing in the NERGA Individual competition will tee off first, followed by
                the players competing in the Club Competition. Players who are competing in the Individual
                Championship AND are included in the 8 man Club competition, will be allocated in the last groups
                of Individuals.</br></br>
                <b>Groups</b> - Wherever possible - every group will consist of 3 players. The Players in the Individual
                competition will go out in reverse "average score" order with the players with the lowest average
                scores going out first, with players with the best average score going out last. The groups for the club
                championship will be made up of players from 3 different clubs.</br></br>
                <b>Top Player replacement</b>– If the top player from a club is not available to attend Finals Day, the host
                club can nominate a replacement – where the expectation is that the replacement is the 2nd highest
                scoring player in the club.
                Top Player from a club that has qualified for Finals day – The top player can play in both
                competitions (Individual and Club competition) or just in the Individual competition. If a player is
                selected to be part of both competitions he must go out as the 1st player in the team comp, thus
                being available for the Individual presentation.</br></br>
                <b>Handicap</b> – Normal NERGA rules apply, where a player plays of their current CONGU handicap. But
                players in the Rabbits competitions must have played at least one game in the 2017 season with a
                handicap of 16 or over.</br></br>
                <b\>Scoring</b\> – Standard Stableford format off full handicap allowance. For team events, best 7 scores to
                count.</br></br>
                <b>Disqualifications</b> – Standard R&A rules apply to incorrectly completed scorecards – this includes
                cards not signed by player and marker and scorecards where the gross score on a hole is incorrect
                (lower score recorded).</br></br>

                <b>Tied Score</b> – For individual comps the back 9, back 6 etc method will be used to determine placings
                where players have the same score. For Team comps, the best 7 scores will be used to determine
                the placings, with ties being determined by reference to the 8th player score, then the top scorer,
                2nd best etc.</br></br>
               <b> Dress Code</b> – Standard golfing attire, although players may wish to “dress up” for the presentation
                meal & pictures.</br></br>
                <b>Presentation</b> – Two separate presentations will be held at each event, where the results will be
                announced and the trophies presented. All players are encouraged to attend the relevant
                presentation. The Individual presentation (including the meal) will take place once all players in the
                Individual comp have completed their round and submitted their scorecard. The Club presentation
                (including the meal) will take place once all the team players have completed their round.<br><br>
                <b>Guests </b>– Guests are welcome to attend the event, either caddying for a player, or just attending the
                presentation, but there is no opportunity for guests to play the course. Refreshments are available -
                coffee and bacon sandwich before the event and a 2 course meal at the presentation – Food needs
                to be booked and paid for at the Registration desk on the day.</br></br>

                Please contact Iwan Owen (NERGA Comp sec) with any queries or questions
                Iwansliw@yahoo.com
                0776 236 7617</br></br> </p>



                <p>NERGA will host two separate Finals Days in 2018, with both events taking place at Ramside Hall.
                The 2018 Inter Finals day will take place on Saturday 6th October with the NERGA Finals Day taking place a week later on Saturday 13th October.</p>
                </div>
            <?php echo View::make('partials.footer') ?>
        </div>
    </div>
</div>
@endsection