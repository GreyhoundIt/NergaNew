@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <?php echo View::make('partials.hero') ?>
                <div class="inner-content col-md-12">
                    <h1>NERGA would like to thank our following sponsors</h1>
                    <a href="http://www.rockliffehall.com/golf/"><img alt="Rockliffe Hall Hotel Golf and Spa" src="/images/rockliffe.png" /></a>

                </div>
                <?php echo View::make('partials.footer') ?>
            </div>
        </div>
    </div>
@endsection
