<?php

namespace Rapidez\GuestWishlist;

use Illuminate\Support\ServiceProvider;

class GuestWishlistServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'rapidez-guestwishlist');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/rapidez-guestwishlist'),
        ], 'views');
    }
}
