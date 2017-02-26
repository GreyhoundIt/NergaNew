@extends('layouts.app')

@section('content')
    @if(Auth::user()->isAdmin ==1)
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <?php echo View::make('partials.hero') ?>
                <div class="inner-content col-md-12">
                    <h1>All Zones</h1>
                    <table class="table table-hover">
                        <tr>
                            <th>Name</th>
                            <th>League</th>
                            <th></th>
                        </tr>
                        @foreach($zones as $zone)
                            <tr>
                                <td>{{ $zone->name }}</td>
                                <td>{{$zone->league->name}}</td>
                                <td><a href="{{ route('admin.zone.edit' , $zone->id) }}" class="btn btn-warning pull-right edit-btn" role="button">Edit Zone</a></td>
                            </tr>

                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection
