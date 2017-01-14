@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <?php echo View::make('partials.hero') ?>
                <div class="inner-content col-md-12">
                    <!-- Display Errors -->
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <h1>Create a Fixture</h1>
                    {!! Form::open(array('route' => 'admin.fixture.store')) !!}

                    {{ Form::label('club_id', 'Host Club:') }}
                    {{ Form::select('club_id' , $clubs) }}

                    {{ Form::label('zone_id', 'Zone:') }}
                    {{ Form::select('zone_id' , $zones) }}

                    {{ Form::label('fixture_date', 'Date:') }}
                    {{ Form::time('fixture_date', \Carbon\Carbon::now()->format('H:i')) }}

                    {{ Form::label('fixture_time', 'Start Time:') }}
                    {{ Form::text('fixture_time', null, array('class' => '')) }}


                    {{ Form::submit('Create Fixture', array('class' => 'btn btn-default btn-lg btn-block btn-form')) }}
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection