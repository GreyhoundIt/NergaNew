@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <?php echo View::make('partials.hero') ?>
                <div class="inner-content col-md-12">
                    <h1>All Fixtures</h1>
                    <ul>
                        @foreach($fixtures as $fixture)

                            <li>Name:{{ $fixture->name }} Date:{{  $fixture->fixture_date->format('d/m/Y') }} <br/>
                                Date:{{  $fixture->fixture_date->diffForHumans() }} League: {{$fixture->zone->name}}   <a href="{{ route('admin.fixture.edit' , $fixture->id) }}" class="btn btn-warning pull-right edit-btn" role="button">Edit Fixture</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection