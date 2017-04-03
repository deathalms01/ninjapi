<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //View::share('test', 'test');
        //View::share('auth', Auth::user());
        View::composer('*', function($view){
            $view->with('auth', Auth::user());
        });
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
