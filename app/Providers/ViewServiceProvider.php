<?php

namespace App\Providers;

use App\Http\View\Composers\MenuComposer;
use Illuminate\Support\Facades;
use Illuminate\Support\ServiceProvider;


class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Facades\View::composer('header', MenuComposer::class);
    }
}
