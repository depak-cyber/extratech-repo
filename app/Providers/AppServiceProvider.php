<?php

namespace App\Providers;
<<<<<<< HEAD
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
=======
use App\Models\NavItem;
>>>>>>> 2b9288cd6fb6e5436431058fccfa9d0a190df643

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
<<<<<<< HEAD
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
=======
        // Schema::defaultStringLength(191);
      $navItems = NavItem::where('status', 'Enabled')->get();

      view()->share('navItems', $navItems);
>>>>>>> 2b9288cd6fb6e5436431058fccfa9d0a190df643

    }
}
