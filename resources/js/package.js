import wishlist from './Wishlist.vue'

document.addEventListener('vue:loaded', function (event) {
	const vue = event.detail.vue
	vue.component('wishlist', wishlist)
})

