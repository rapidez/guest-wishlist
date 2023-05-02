@extends('rapidez::layouts.app')

@section('title', __('Wishlist'))
@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <div class="container mx-auto">
        <wishlist>
            <div slot-scope="{ wishlist }">
                <div v-if="wishlist.length">
                    <x-rapidez::productlist value="wishlist"/>
                </div>
                <div v-else>
                    @lang('You have no items in your wish list.')
                </div>
            </div>
        </wishlist>
    </div>
@endsection
