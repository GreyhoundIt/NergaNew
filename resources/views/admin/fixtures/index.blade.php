@extends('layouts.app')
@section('content')
    @if(Auth::user()->isAdmin ==1)
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <?php echo View::make('partials.hero') ?>
                <div class="inner-content col-md-12">
                    <h1>All Fixtures</h1>
                    <table class="table table-hover">
                        <tr>
                            <th>Name</th>
                            <th>Post Code</th>
                            <th>Date</th>
                            <th>League</th>
                            <th>Time</th>
                            <th></th>
                        </tr>

                        @foreach($fixtures as $fixture)
                            <tr>
                                <td>{{ $fixture->club->name }}</td>
                                <td>{{ $fixture->club->post_code }}</td>
                                <td>{{ $fixture->fixture_date->format('d/m/Y H:i') }}</td>
                                <td>{{ $fixture->zone->name }}</td>
                                <td>{{ $fixture->fixture_date->diffForHumans() }}</td>
                                <td><a href="{{ route('admin.fixture.edit' , $fixture->id) }}" class="btn btn-warning pull-right edit-btn" role="button">Manage Fixture</a></td>
                            </tr>
                        @endforeach
                    </table>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection
