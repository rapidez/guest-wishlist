<wishlist>
    <div slot-scope="{ wishlist, toggle }">
        <x-rapidez::button v-on:click="toggle({{ $sku }})">
            <x-heroicon-s-heart v-if="wishlist.includes({{ $sku }})" class="h-5 w-5" v-cloak />
            <x-heroicon-o-heart v-else class="h-5 w-5" />
        </x-rapidez::button>
    </div>
</wishlist>
