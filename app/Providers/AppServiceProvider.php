<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Zone;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    //    $this->interZones = Zone::where('league_id' , 1)->orderBy('name', 'asc')->get();
     //  $this->nergaZones = Zone::where('league_id' , 2)->orderBy('name', 'asc')->get();
      //  view()->share('interZones', $this->interZones);
     //  view()->share('nergaZones', $this->nergaZones);
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
