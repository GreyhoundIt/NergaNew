@extends('layouts.app')

@section('content')
    @if(Auth::user()->isAdmin ==1)
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
                    <h1>Update a Zone</h1>
                    {!! Form::model($zone, ['route' => ['admin.zone.update', $zone->id], 'files' => true, 'method'=>'patch']) !!}

                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name', null, array('class' => 'form-control')) }}

                    {{ Form::label('league_id', 'League:') }}
                    {{ Form::select('league_id' ,$leagues) }}

                    <div style="background-color: #f0ad4e">
                        {{ Form::label('team_overall', 'Team Overall Results:') }}
                        {{ Form::file('team_overall', array('class' => 'form-control', 'style'=>"background-color: #f0ad4e", 'accept'=>'application/pdf')) }}
                    </div>
                    <div style="background-color: mediumpurple">
                        {{ Form::label('person_overall', 'Individual Overall:') }}
                        {{ Form::file('person_overall', array('class' => 'form-control', 'style'=>"background-color: mediumpurple", 'accept'=>'application/pdf')) }}
                    </div>


                    {{ Form::submit('Update Zone', array('class' => 'btn btn-default btn-lg btn-block btn-form')) }}
                    {!! Html::linkRoute('admin.zone.show', 'Cancel', array($zone->id), array('class' => 'btn btn-warning btn-lg btn-block btn-form')) !!}
                    {!! Form::close() !!}

                    <!-- Form to delete zone -->
                    {!! Form::open([
                        'method' => 'DELETE',
                        'route' => ['admin.zone.destroy', $zone->id]
                    ]) !!}
                    {!! Form::submit('Delete this Zone?', ['class' => 'btn btn-danger btn-lg btn-block btn-form']) !!}
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
    @endif
@endsection