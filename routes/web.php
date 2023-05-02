<?php

Route::middleware('web')->group(function () {
    Route::view('wishlist', 'rapidez-guestwishlist::wishlist');
});
