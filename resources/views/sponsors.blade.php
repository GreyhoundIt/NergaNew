@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <?php echo View::make('partials.hero') ?>
                <div class="inner-content col-md-12">
                    <h1>NERGA would like to thank our following sponsors</h1>
                    <h3>Ramside Hall</h3>
                    <a href="http://www.ramsidehallhotel.co.uk/golf/">Ramside Hall gold</a>

                </div>
                <?php echo View::make('partials.footer') ?>
            </div>
        </div>
    </div>
@endsection
