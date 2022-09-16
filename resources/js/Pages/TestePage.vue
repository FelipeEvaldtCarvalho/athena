<template>
    <div v-for="product in arrayProducts">
        {{ product.imgs }}
    </div>
</template>
<script>
export default {
    name: "TestePage",
    components: {},
    data() {
        return {
            arrayProducts: [],
        };
    },
    props: {
        categories: Object,
        products: Array,
    },
    methods: {
        getData() {
            this.arrayProducts = this.products;
            this.arrayProducts.forEach((product) => {
                product.imgs = product.imgs.split(",");
            });
        },
    },
    mounted() {
        this.getData();
    },
};
</script>
