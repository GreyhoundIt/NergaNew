@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <?php echo View::make('partials.hero') ?>
                <div class="inner-content col-md-12">
                    <h1>Rules</h1>
                    <h3>Constitution</h3>
                    <div id="rules">
                        <ul>
                            <li>The purpose of the Association is to promote high handicap golf throughout the North East.<br />
                                NERGA &#8211; 16 -28 handicaps .<br />
                                INTER &#8211;   10-15 handicaps</li>
                            <li>The aims are to provide competitive and enjoyable golf for all high handicap  golfers, and to generate good income for participating Member Clubs.</li>
                            <li>The Association shall be administered by 4 Officers - Chairman , Secretary , Treasurer and Competition Secretary and a Management Committee being one elected person from each Zone League.Officers to serve 2 years and to provide continuity the Chairman and Competition Secretary to be elected on odd number years and the Secretary and Treasurer on even number years.Elected Committee person shall serve till the next AGM (2014)</li>
                            <li>The AGM to be held November each year.</li>
                            <li>The Management Committee shall be empowered to run the Association with responsibilities for its Finances and Disciplinary matters and introduction / ammendment to Constitution and Rules.</li>
                            <li>All Officers and Committee members have a vote. In the event of deadlock the Chairman will have the casting vote.	</li>
                            <li>A vote on the continued participation of each Member Club will be taken at the AGM.Each Member Club being required to obtain a majority of approval from the other Clubs.</li>
                        </ul>
                        <h3>Match Rules</h3>
                        <ol>
                            <li>	All players should be at least 18 years of age on the day they play the NERGA / INTER fixture</li>

                            <li>	Each Club shall host 1 weekend fixture per season requiring the 1st Tee to be reserved for up
                                to 3 hours.The only exception to this will be for new Member Clubs who may be allowed to use
                                a Bank Holiday Date in their first season only</li>

                            <li>	Match Postponements. If any Club are forced to postpone a scheduled fixture they are required
                                to give at least 14 days notice to the Secretary and agree a rearrangement date that does not
                                clash with exsisting fixtures.The penalty for failing to comply shall be loss of fixture and a NERGA
                                / INTER points deduction of 3 points.</li>

                            <li>	Match Abondonment. Once play has commenced the Host Club Offical shall have the absolute right
                                to suspend play and / or abandon the match. In such an event the result will be calculated upon the
                                number of holes completed by final playing match group in the fixture.NERGA / INTER points will be
                                awarded as normal 8pts for 1st place down to 1pt for 8th place.
                                If any game has not completed 6 holes then the entire fixture shall be declared void.</li>

                            <li>	In all cases of abandonment attempts to rearrange the fixture shall be made to fulfil the fixture and
                                create revenue for the host Club.Rearranged date to be offered within 1 month of abandonment.
                                However,the rearranged fixture date nust be acceptable to all Clubs in that League.In the event that
                                one or more Clubs cannot support the rearranged date the the fixture will be deemed void.</li>

                            <li>	All matches will be played in Stableford format off full Handicap.The handicap range  NERGA  16 to 28 / INTER 8 - 15
                                and all players must be in this range for their 1st fixture in the NERGA / INTER season. Once the player has played one
                                NERGA / INTER match in the season they will be eligible to play for the remainder of that season even if their
                                handicap is cut below 16  or 8 , off their new handicap.</li>

                            <li>NERGA / INTER match starting times to be between 9.30 - 12.30. . Starting times to be determined by the Club.</li>

                            <li>	NERGA  matches will be played off Yellow Tees at 8 / 9 minute intervals in 3 balls. Some 2 balls maybe necessary
                                at the front to balance total playing numbers.</li>

                            <li>	INTER matches will be played off White Tees at 8 / 9 minute intervals in 3 balls. Some 2 balls maybe necessary
                                at the front to balance total playing numbers.</li>

                            <li>	Each team will consist of 8 players the best 7 scores counting for the team total. If two teams finish with
                                equal points total then the best 8th score shall be used to determine the higher place.The team with the
                                highest total shall be awarded 8 pts down to 1 pt.</li>

                            <li>	Any Club fielding a team short of one or more players will be deducted 1 NERGA / INTER point.</li>

                            <li>	Match fee for 2015 to remain at £10.00 per player.</li>

                            <li>	Individual Trophy . A player must play in a minimum of 3 NERGA / INTER fixtures within the season.The calculation
                                will be the best 3 Stableford scores total in the season.In the event of a tie the 4th score to count to
                                determine the highest place player.The highest place player from each Clubwill be invited to the Finals day
                                to contest the NERGA / INTER Individual Trophy.  In the event that the player is not available to attend then
                                the Club to nominate a replacement to ensure all Clubs have a representative in the NERGA / INTER Individual
                                Trophy Final.</li>

                            <li>	NERGA / INTER  Club Championship. At the end of the season the Club with the highest NERGA / INTER points total will be
                                the Zone League Champion and all Zone League Champions will be invited to contest the NERGA / INTER  Club
                                Championship at the Finals Day.Also to be invited the highest points scoring Runner Up from all the Zone
                                Leagues.</li>

                            <li>	The best runner position will be determined by the REX Factor.</li>

                            <li><li>	Any player who fails to submit a correct scorecard properly signed by himself and his marker will be disqualified.</li>

                            <li>	Handicaps. All Clubs must accept 'Away Score' from NERGA / INTER fixtures and process them to maintain the integrity
                                of all player handicaps.<br/>
                                In the event that a Club does not process 'Away Score' of a high scoring player then the NERGA Secretary will
                                apply a handicap reduction to that player prior to the next fixture in keeping with our HandicapMaster system.
                                This to be communicated to the Host Club and Players Rabbit Captain.</li>

                            <li>	All proposed Constitution & Rule changes are to be submitted to the Secretary 7 days prior to the AGM.</li>
                        </ol>
                    </div>
                </div>
                <?php echo View::make('partials.footer') ?>
            </div>
        </div>
    </div>
@endsection
