@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <?php echo View::make('partials.hero') ?>
                <div class="inner-content col-md-12">
                    <h1>NERGA would like to thank our following sponsors</h1>
                    <a href="http://www.rockliffehall.com/golf/"><img alt="Woodham Golf and Country Club" src="http://www.woodhamgolfandcountryclub.co.uk/wp-content/uploads/2015/03/wg_banner_2.jpg" width=" 100%"/></a>

                </div>
                <?php echo View::make('partials.footer') ?>
            </div>
        </div>
    </div>
@endsection
