@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <?php echo View::make('partials.hero') ?>
                <div class="inner-content col-md-12">
                    <h1>All Clubs</h1>
                    <ul>
                        @foreach($clubs as $club)
                            <li>Name:{{ $club->name }} PostCode:{{  $club->post_code }} Website: {{$club->website}}<br/>
                                  <a href="{{ route('admin.club.edit' , $club->id) }}" class="btn btn-warning pull-right edit-btn" role="button">Edit Club</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
