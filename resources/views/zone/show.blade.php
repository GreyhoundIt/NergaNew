@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <?php echo View::make('partials.hero') ?>
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        <h1 class="text-center">{{Session::get('success')}}</h1>
                    </div>
                @endif
                <div class="inner-content col-md-12">
                    <h1 class="text-center">{{$zone->name}}</h1>
                    <h4 class="text-center">Zone representative: {{$zone->rep_name}} - {{$zone->rep_club}}</h4>
                    <hr>
                </div>
                <div class="inner-content col-md-12">

                    {{--If we have a future fixture --}}
                    @if($next)
                        <h3 class="text-center">Next Fixture: {{$next->club->name}}</h3>
                        <h4 class="text-center">{{$next->fixture_date->diffForHumans()}} {{$next->fixture_date->toDayDateTimeString()}}</h4>
                        <h5 class="text-center">Post Code: {{$next->club->post_code}}</h5>
                        <p class="text-center pad-bot"> {{ link_to($next->club->website, $title = "Visit Website", $attributes = array("target"=>"_blank", 'Class' => 'btn btn-primary')) }}</p>

                        @if (Auth::user() &&  (in_array($zone->id, $userzone)))<br/>
                            @if($opening >$present)
                                <p class="text-center"> Team entries will open at {{$opening->toDayDateTimeString()}}
                                </p>
                            @elseif($closing > $present && $opening < $present)
                            <p class="text-center negative-top">{{link_to_action('UserTeamSheetController@createOrUpdate', $title = "Submit / Edit Team", $parameters = [$next->id], $attributes = ['Class' => 'btn btn-success'])}}</p>
                                <p class="text-center">Closing time for entries is {{$closing->addHour()->toDayDateTimeString()}}</p>
                            @elseif($closing < $present)
                                <p class="text-center">Sorry entries closed at {{$closing->addHour()->toDayDateTimeString()}}</p>

                            @endif
                        @endif

                        @if(isset($forcast)){
                        @foreach($forecast as $weather)
                            <div class="equal">
                                <div class="col-md-2 pad-bot weather-box">
                                    <p class="text-center">
                                        <span class="text-center">{{$weather->time->day->format('d.m.Y')}}</span><br/>
                                        <span class="text-center">{{ucwords($weather->weather->description)}}</span><br/>
                                        <img class="text-center"
                                             src="http://openweathermap.org/img/w/{{$weather->weather->icon}}.png"/><br/>
                                        Temp: {{$weather->temperature}}<br/>
                                        Wind: {{ucwords($weather->wind->direction->getDescription())}}
                                        , {{ucwords($weather->wind->speed->getDescription())}}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                        @endif

                    @else
                        <h3>All Fixtures are complete for this season</h3>
                    @endif

                </div>
                @if($fortnight && $fortnight->club->id !== $next->club->id)
                    {{-- game in a fortnight --}}
                    <div class="inner-content col-md-12">
                        <span> Later fixture : {{$fortnight->club->name}}
                            in {{$next->fixture_date->diffForHumans()}} {{$fortnight->fixture_date->toDayDateTimeString()}}
                            Post Code: {{$fortnight->club->post_code}}</span>
                        {{ link_to($fortnight->club->website, $title = "Visit Website", $attributes = array("target"=>"_blank", 'Class' => 'btn btn-primary')) }}

                        @if (Auth::user() &&  (in_array($zone->id, $userzone)))
                            {{link_to_action('UserTeamSheetController@createOrUpdate', $title = "Submit / Edit Team", $parameters = [$fortnight->id], $attributes = ['Class' => 'btn btn-success'])}}
                        @endif

                    </div>
                @endif


                <div class="inner-content col-md-12">
                    <hr>
                    @if($zone->team_overall)<a href="https://s3.eu-west-2.amazonaws.com/nerga/{{($zone->team_overall)}}" class="btn btn-success edit-btn"
                                               role="button" target="_blank">Zone Team Overall</a>
                    @endif
                    @if($zone->person_overall)<a href="https://s3.eu-west-2.amazonaws.com/nerga/{{($zone->person_overall)}}"
                                                 class="btn btn-success edit-btn" role="button" target="_blank">Zone
                        Individual Overall</a>
                    @endif
                    <hr>
                </div>

                <div class="inner-content col-md-12">
                    <table class="table table-hover">
                        <tr>
                            <th>Venue</th>
                            <th>Date</th>
                            <th>Information</th>
                        </tr>
                        @foreach($fixtures as $fixture)
                            <tr>
                                <td>{{$fixture->club->name}}</td>
                                <td>{{$fixture->fixture_date->toDayDateTimeString()}} @if($fixture->bye_team)
                                        * {{ $fixture->bye_team }} @endif</td>
                                <td>
                                    @if(($fixture->start_sheet_skeleton) && ($fixture->start_sheet_official == null) && ($fixture->team_overall == NULL) && ($fixture->person_overall == NULL))
                                        <a href="https://s3.eu-west-2.amazonaws.com/nerga/{{($fixture->start_sheet_skeleton) }}"
                                           class="btn btn-warning edit-btn" role="button" target="_blank">Start
                                            Sheet</a>
                                    @endif

                                    @if(($fixture->start_sheet_official) && ($fixture->team_overall == NULL) && ($fixture->person_overall == NULL))
                                        <a href="https://s3.eu-west-2.amazonaws.com/nerga/{{($fixture->start_sheet_official) }}"
                                           class="btn btn-primary edit-btn" role="button" target="_blank">Start
                                            Sheet</a>
                                    @endif

                                    @if($fixture->team_overall)<a
                                            href="https://s3.eu-west-2.amazonaws.com/nerga/{{ ($fixture->team_overall)}}"
                                            class="btn btn-success edit-btn" role="button"
                                            target="_blank">Team</a>
                                    @endif

                                    @if($fixture->person_overall)<a
                                            href="https://s3.eu-west-2.amazonaws.com/nerga/{{($fixture->person_overall) }}"
                                            class="btn btn-success edit-btn" role="button"
                                            target="_blank">Individual</a>
                                    @endif </td>
                            </tr>
                        @endforeach
                    </table>
                    * None playing team at fixture
                </div>


            </div>
        </div>
    </div>
@endsection


