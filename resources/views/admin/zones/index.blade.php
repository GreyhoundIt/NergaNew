@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <?php echo View::make('partials.hero') ?>
                <div class="inner-content col-md-12">
                    <h1>All Zones</h1>
                    <ul>
                        @foreach($zones as $zone)
                            <li>Name:{{ $zone->name }}   League: {{$zone->league->name}}   <a href="{{ route('admin.zone.edit' , $zone->id) }}" class="btn btn-warning pull-right edit-btn" role="button">Edit Zone</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
