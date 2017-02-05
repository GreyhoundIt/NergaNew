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
                    <h1>Manage {{$fixture->club->name}} fixture</h1>

                    {{link_to_action('AdminFixtureController@generateFixtureTeamsheet', $title = "Generate Teams", $parameters = [$fixture->id], $attributes = ['Class' => 'btn btn-success'])}}

                    {!! Form::model($fixture,  ['route' => ['admin.fixture.update',$fixture->id], 'files' => true, 'method'=>'patch']) !!}


                    {{ Form::label('fixture_date', 'Date:') }}
                    {{ Form::text('fixture_date', null, array('class' => 'form-control')) }}

                    {{ Form::label('bye_team', 'None Playing Team:') }}
                    {{ Form::text('bye_team', null, array('class' => 'form-control')) }}


                    <div style="background-color: gray">
                    {{ Form::label('start_sheet_skeleton', 'Start sheet skeleton:') }}
                    {{ Form::file('start_sheet_skeleton', array('class' => 'form-control', 'style'=>"background-color: gray" ,'accept'=>'application/pdf')) }}
                    </div>
                    <div style="background-color: #4cae4c">
                    {{ Form::label('start_sheet_official', 'Start sheet Official:') }}
                    {{ Form::file('start_sheet_official', array('class' => 'form-control', 'style'=>"background-color: #4cae4c" ,'accept'=>'application/pdf')) }}
                    </div>
                    <div style="background-color: #f0ad4e">
                        {{ Form::label('team_overall', 'Team Overall Results:') }}
                        {{ Form::file('team_overall', array('class' => 'form-control', 'style'=>"background-color: #f0ad4e", 'accept'=>'application/pdf')) }}
                    </div>
                    <div style="background-color: mediumpurple">
                        {{ Form::label('person_overall', 'Individual Overall:') }}
                        {{ Form::file('person_overall', array('class' => 'form-control', 'style'=>"background-color: mediumpurple", 'accept'=>'application/pdf')) }}
                    </div>
                    {{ Form::submit('Update Fixture and Go to Update Zone', array('class' => 'btn btn-default btn-lg btn-block btn-form')) }}
                    {!! Html::linkRoute('admin.fixture.index', 'Cancel', array($fixture->id), array('class' => 'btn btn-warning btn-lg btn-block btn-form')) !!}
                    {!! Form::close() !!}

                <!-- Form to delete fixture -->
                    {!! Form::open([
                        'method' => 'DELETE',
                        'route' => ['admin.fixture.destroy', $fixture->id]
                    ]) !!}
                    {!! Form::submit('Delete this Fixture?', ['class' => 'btn btn-danger btn-lg btn-block btn-form']) !!}
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection