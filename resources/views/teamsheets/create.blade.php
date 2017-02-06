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
                    <h1>Enter your Team</h1>
                        {{ $club->name }}

                    {!! Form::open(array('route' => 'user.team.store')) !!}
                    <div class="row player odd">
                        <div class="col-md-4">
                        {{ Form::label('p1_first_name', 'Player 1 First Name:') }}
                        {{ Form::text('p1_first_name', null, array('class' => 'form-control', )) }}
                        </div>
                        <div class="col-md-4">
                        {{ Form::label('p1_last_name', 'Player 1 Last Name:') }}
                        {{ Form::text('p1_last_name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-md-4">
                        {{ Form::label('p1_handicap', 'Player 1 Handicap') }}
                        {{ Form::number('p1_handicap', null, array('class' => 'form-control', 'step' =>'any')) }}
                        </div>
                    </div>

                    <div class="row player even">
                        <div class="col-md-4">
                            {{ Form::label('p2_first_name', 'Player 2 First Name:') }}
                            {{ Form::text('p2_first_name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-md-4">
                            {{ Form::label('p2_last_name', 'Player 2 Last Name:') }}
                            {{ Form::text('p2_last_name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-md-4">
                            {{ Form::label('p2_handicap', 'Player 2 Handicap') }}
                            {{ Form::number('p2_handicap', null, array('class' => 'form-control', 'step' =>'any')) }}
                        </div>
                    </div>

                    <div class="row player odd">
                        <div class="col-md-4">
                            {{ Form::label('p3_first_name', 'Player 3 First Name:') }}
                            {{ Form::text('p3_first_name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-md-4">
                            {{ Form::label('p3_last_name', 'Player 3 Last Name:') }}
                            {{ Form::text('p3_last_name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-md-4">
                            {{ Form::label('p3_handicap', 'Player 3 Handicap') }}
                            {{ Form::number('p3_handicap', null, array('class' => 'form-control', 'step' =>'any')) }}
                        </div>
                    </div>

                    <div class="row player even">
                        <div class="col-md-4">
                            {{ Form::label('p4_first_name', 'Player 4 First Name:') }}
                            {{ Form::text('p4_first_name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-md-4">
                            {{ Form::label('p4_last_name', 'Player 4 Last Name:') }}
                            {{ Form::text('p4_last_name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-md-4">
                            {{ Form::label('p4_handicap', 'Player 4 Handicap') }}
                            {{ Form::number('p4_handicap', null, array('class' => 'form-control', 'step' =>'any')) }}
                        </div>
                    </div>

                    <div class="row player odd">
                        <div class="col-md-4">
                            {{ Form::label('p5_first_name', 'Player 5 First Name:') }}
                            {{ Form::text('p5_first_name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-md-4">
                            {{ Form::label('p5_last_name', 'Player 5 Last Name:') }}
                            {{ Form::text('p5_last_name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-md-4">
                            {{ Form::label('p5_handicap', 'Player 5 Handicap') }}
                            {{ Form::number('p5_handicap', null, array('class' => 'form-control', 'step' =>'any')) }}
                        </div>
                    </div>

                    <div class="row player even">
                        <div class="col-md-4">
                            {{ Form::label('p6_first_name', 'Player 6 First Name:') }}
                            {{ Form::text('p6_first_name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-md-4">
                            {{ Form::label('p6_last_name', 'Player 6 Last Name:') }}
                            {{ Form::text('p6_last_name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-md-4">
                            {{ Form::label('p6_handicap', 'Player 6 Handicap') }}
                            {{ Form::number('p6_handicap', null, array('class' => 'form-control', 'step' =>'any')) }}
                        </div>
                    </div>

                    <div class="row player odd">
                        <div class="col-md-4">
                            {{ Form::label('p7_first_name', 'Player 7 First Name:') }}
                            {{ Form::text('p7_first_name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-md-4">
                            {{ Form::label('p7_last_name', 'Player 7 Last Name:') }}
                            {{ Form::text('p7_last_name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-md-4">
                            {{ Form::label('p7_handicap', 'Player 7 Handicap') }}
                            {{ Form::number('p7_handicap', null, array('class' => 'form-control', 'step' =>'any')) }}
                        </div>
                    </div>

                    <div class="row player even">
                        <div class="col-md-4">
                            {{ Form::label('p8_first_name', 'Player 8 First Name:') }}
                            {{ Form::text('p8_first_name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-md-4">
                            {{ Form::label('p8_last_name', 'Player 8 Last Name:') }}
                            {{ Form::text('p8_last_name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-md-4">
                            {{ Form::label('p8_handicap', 'Player 8 Handicap') }}
                            {{ Form::number('p8_handicap', null, array('class' => 'form-control', 'step' =>'any')) }}
                        </div>
                    </div>

                    <div class="row player odd">
                        <div class="col-md-4">
                            {{ Form::label('g1_first_name', 'Guest 1 First Name:') }}
                            {{ Form::text('g1_first_name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-md-4">
                            {{ Form::label('g1_last_name', 'Guest 1 Last Name:') }}
                            {{ Form::text('g1_last_name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-md-4">
                            {{ Form::label('g1_handicap', 'Guest 1 Handicap') }}
                            {{ Form::number('g1_handicap', null, array('class' => 'form-control', 'step' =>'any')) }}
                        </div>
                    </div>

                    <div class="row player even">
                        <div class="col-md-4">
                            {{ Form::label('g2_first_name', 'Guest 2 First Name:') }}
                            {{ Form::text('g2_first_name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-md-4">
                            {{ Form::label('g2_last_name', 'Guest 2 Last Name:') }}
                            {{ Form::text('g2_last_name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-md-4">
                            {{ Form::label('g2_handicap', 'Guest 2 Handicap') }}
                            {{ Form::number('g2_handicap', null, array('class' => 'form-control', 'step' =>'any')) }}
                        </div>
                    </div>
                    <div class="row player">
                        <div class="col-md-4">
                            {{ Form::hidden('fixture_id', (int)$fixture[0], array('class' => 'form-control', )) }}
                        </div>
                        <div class="col-md-4">
                            {{ Form::hidden('user_id', (int)$userid, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-md-4">
                            {{ Form::hidden('club', $club->name, array('class' => 'form-control')) }}
                        </div>
                    </div>

                    {{ Form::submit('Submit Team', array('class' => 'btn btn-default btn-lg btn-block btn-form')) }}
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection