<template>
    <section class="mb-5">
        <h1 class="section-title fp-100">Todas as peças</h1>
        <div
            class="d-flex align-content-center justify-content-evenly flex-wrap pb-5"
        >
            <div class="w-45 my-4" v-for="product in productsList">
                <a :href="`/product/${product.id}`">
                    <img class="img-fluid rounded" :src="product.imgs[0]" alt="" />
                </a>
                <p class="product-name">
                    <a :href="`/product/${product.id}`">{{ product.name.toUpperCase() }}</a>
                </p>
                <p class="product-price">
                    <a :href="`/product/${product.id}`">
                        {{
                            product.price.toLocaleString("pt-br", {
                                style: "currency",
                                currency: "BRL",
                            })
                        }}
                    </a>
                </p>
            </div>
        </div>
        <div class="d-flex w-100 justify-content-around">
            <Link v-if="products.links[0].url" class="btn rounded" :href="products.links[0].url">
                <i class="bi bi-chevron-left"></i>
            </Link>
            <a v-if="!products.links[0].url" class="btn rounded" :href="products.last_page_url">
                <i class="bi bi-chevron-left"></i>
            </a>
            <a v-if="products.links[products.links.length - 1].url" class="btn" :href="products.links[products.links.length - 1].url"><i class="bi bi-chevron-right"></i></a>
            <a v-if="!products.links[products.links.length - 1].url" class="btn" :href="products.first_page_url"><i class="bi bi-chevron-right"></i></a>
        </div>
    </section>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import stringToArray from "../Services/stringToArray";
import IndexCategoryComponent from "./IndexCategoryComponent.vue";
export default {
    name: "CategoryComponent",
    props: {
        category: Object,
        products: Object,
    },
    components: {
        IndexCategoryComponent,
        Link
    },
    data() {
        return {
            sliderTitle: "Novidades da categoria",
            productsList:[]
        };
    },
    methods: {
        setProductsList() {
            this.productsList = this.products.data;
            this.productsList.forEach( product => {
                product.imgs = stringToArray(product.imgs);
            })
        }
    },
    mounted() {
        this.setProductsList();
    }
};
</script>
<style scoped>
.section-title {
    font-family: "Roboto", sans-serif;
    font-size: 1.5em;
    font-weight: 300;
    padding: 15px 0 25px 25px;
    margin: 0;
}
.w-45 {
    width: 45%;
}
.product-name {
    font-family: "Roboto", sans-serif;
    font-weight: 300;
    font-size: 0.8em;
    padding-top: 5px;
    margin: 0;
}
.product-name a {
    text-decoration: none;
    color: #645e56;
}
.product-price {
    font-family: "Roboto", sans-serif;
    font-weight: 700;
    padding-top: 5px;
    margin: 0;
}
.product-price a {
    text-decoration: none;
    color: #645e56;
}
.btn {
    font-family: "Roboto", sans-serif;
    font-weight: 300;
    background-color: #645e56;
    border: none;
    color: #fff;
}
.btn:hover {
    background-color: #433e37;
    border: none;
}
.fp-100 {
    font-family: "Roboto", sans-serif;
    font-weight: 100;
    color: #645e56;
}
.fp-300 {
    font-family: "Roboto", sans-serif;
    font-weight: 300;
    color: #645e56;
}
.fp-700 {
    font-family: "Roboto", sans-serif;
    font-weight: 700;
    color: #645e56;
}
</style>
