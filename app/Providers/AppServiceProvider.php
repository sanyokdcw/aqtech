<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

use App\Models\Page;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $pages = Page::all();
        View::share('pages', $pages);
    }
}
