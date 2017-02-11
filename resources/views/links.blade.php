@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <?php echo View::make('partials.hero') ?>
                <div class="inner-content col-md-12">
                    <table class="table table-hover">
                        <tr>
                            <th>Name</th>
                            <th>Post Code</th>
                            <th>Website</th>

                        </tr>
                        @foreach($clubs as $club)
                            <tr>
                                <td>{{ $club->name }}</td>
                                <td>{{ $club->post_code }}</td>
                                <td>{{ link_to($club->website, $title = "Visit Website", $attributes = array("target"=>"_blank", 'Class' => 'btn btn-primary')) }}</td>
                            </tr>
                        @endforeach
                    </table>

                </div>
                <?php echo View::make('partials.footer') ?>
            </div>
        </div>
    </div>
@endsection
