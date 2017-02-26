@extends('layouts.app')
@section('content')
    @if(Auth::user()->isAdmin ==1)
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <?php echo View::make('partials.hero') ?>
                <div class="inner-content col-md-12">
                    <h1>All Clubs</h1>
                    <table class="table table-hover">
                        <tr>
                            <th>Name</th>
                            <th>Post Code</th>
                            <th>Website</th>
                            <th></th>
                        </tr>
                        @foreach($clubs as $club)
                            <tr>
                                <td>{{ $club->name }}</td>
                                <td>{{ $club->post_code }}</td>
                                <td>{{$club->website}}</td>
                                <td><a href="{{ route('admin.club.edit' , $club->id) }}" class="btn btn-warning pull-right edit-btn" role="button">Edit Club</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endif

@endsection
