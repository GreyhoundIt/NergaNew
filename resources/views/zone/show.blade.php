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
                    <hr>
                </div>
                <div class="inner-content col-md-12">

                    {{--If we have a future fixture --}}
                    @if($next)
                        <span> Next fixture : {{$next->club->name}}
                            in {{$next->fixture_date->diffForHumans()}} {{$next->fixture_date->toDayDateTimeString()}}
                            Post Code: {{$next->club->post_code}}</span>
                        {{ link_to($next->club->website, $title = "Visit Website", $attributes = array("target"=>"_blank", 'Class' => 'btn btn-primary')) }}

                        @if (Auth::user() &&  (in_array($zone->id, $userzone)))
                            {{link_to_action('UserTeamSheetController@createOrUpdate', $title = "Submit / Edit Team", $parameters = [$next->id], $attributes = ['Class' => 'btn btn-success'])}}
                        @endif
                    @else
                        <span>All Fixtures are complete for this season</span>
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
                    @if($zone->team_overall)<a href="{!! url($zone->team_overall) !!}" class="btn btn-success edit-btn"
                                               role="button" target="_blank">Zone Team Overall</a>
                    @endif
                    @if($zone->person_overall)<a href="{!! url($zone->person_overall) !!}"
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

                                    @if($fixture->team_overall)<a href="https://s3.eu-west-2.amazonaws.com/nerga/{{ ($fixture->team_overall)}}"
                                                                  class="btn btn-success edit-btn" role="button"
                                                                  target="_blank">Team</a>
                                    @endif

                                    @if($fixture->person_overall)<a href="https://s3.eu-west-2.amazonaws.com/nerga/{{($fixture->person_overall) }}"
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


