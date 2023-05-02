<script>
import { useLocalStorage } from '@vueuse/core'

export default {
    render() {
        return this.$scopedSlots.default({
            add: this.add,
            remove: this.remove,
            toggle: this.toggle,
            wishlist: this.wishlist,
        })
    },

    methods: {
        add(sku) {
            this.wishlist.push(sku)
        },

        remove(sku) {
            this.wishlist = this.wishlist.filter((item) => item !== sku)
        },

        toggle(sku) {
            this.wishlist.includes(sku)
                ? this.remove(sku)
                : this.add(sku)
        }
    },

    computed: {
        wishlist: wrapValue(useLocalStorage('wishlist', []))
    }
}
</script>
