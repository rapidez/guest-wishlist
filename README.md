# Rapidez Guest Wishlist

Simple wishlist for guests where product SKU's will be stored in local storage. There is no cart merging when logging in!

## Installation

```
composer require rapidez/guest-wishlist
```

The wishlist can be found at `/wishlist`

### Product page

To add a wishlist toggle button on the product page just include the button view and specify where the sku can be found as Javascript variable. Add this somewhere on `resources/views/vendor/rapidez/product/overview.blade.php`
```
@include('rapidez-guestwishlist::button', ['sku' => 'config.product.sku'])
```

### Product listing

The same for the product listing `resources/views/vendor/rapidez/listing/partials/item.blade.php`
```
@include('rapidez-guestwishlist::button', ['sku' => 'item.sku'])
```

### Wishlist count

If you'd like to display a wishlist button with a count (for example in the header) you can use this:
```
<wishlist>
    <a href="/wishlist" slot-scope="{ wishlist }">
        <span v-cloak v-if="wishlist.length">@{{ wishlist.length }}</span>
        <span v-else>0</span>
    </a>
</wishlist>
```

## Views

You can publish the views with:
```
php artisan vendor:publish --provider="Rapidez\GuestWishlist\GuestWishlistServiceProvider" --tag=views
```

## License

GNU General Public License v3. Please see [License File](LICENSE) for more information.
