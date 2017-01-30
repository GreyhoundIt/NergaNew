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
                        {{-- Todo change to logged in user --}}
                        @if (Auth::user())

                            {{link_to_action('UserTeamSheetController@createOrUpdate', $title = "Submit / Edit Team", $parameters = [$next->id], $attributes = ['Class' => 'btn btn-success'])}}
                        @endif
                    @else
                        <span>All Fixtures are complete for this season</span>
                    @endif
                    <hr>
                </div>

                <div class="inner-content col-md-12">
                    <ul>
                        @foreach($fixtures as $fixture)
                            <li>{{$fixture->club->name}} ---
                                Date: {{$fixture->fixture_date->toDayDateTimeString()}}
                            @if($fixture->bye_team) * {{ $fixture->bye_team }}
                            @endif
                            </li>
                        @endforeach
                    </ul>
                    * None playing team at fixture
                </div>

            </div>
        </div>
    </div>
@endsection
