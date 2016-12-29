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
                    <h1>Create a Zone</h1>
                    {!! Form::open(array('route' => 'admin.zone.store')) !!}

                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name', null, array('class' => 'form-control')) }}

                    {{ Form::label('league_id', 'League:') }}
                    {{Form::select('league_id' ,$leagues) }}

                    {{ Form::submit('Create Zone', array('class' => 'btn btn-default btn-lg btn-block btn-form')) }}
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection