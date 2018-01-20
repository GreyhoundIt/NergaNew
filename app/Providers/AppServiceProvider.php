<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Zone;
use Illuminate\Routing\UrlGenerator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
        if(env('APP_ENV') !== 'local')
        {
            $url->forceSchema('https');
        }
        //Comment out these lines when deploying
        $this->interZones = Zone::where('league_id' , 1)->orderBy('name', 'asc')->get();
        $this->nergaZones = Zone::where('league_id' , 2)->orderBy('name', 'asc')->get();
        view()->share('interZones', $this->interZones);
        view()->share('nergaZones', $this->nergaZones);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
