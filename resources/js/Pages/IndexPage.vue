<template>
    <div>
        <NavbarComponent />
        <BannerComponent />
        <BestSellersComponent :bestsellers="arrayBestsellers" />
        <IndexCategoryComponent
            :categories="arrayCategories"
            :title="categoryName"
            :linkActive="true"
            :subtitleActive="true"
        />
        <FooterComponent />
    </div>
</template>
<script>
import stringToArray from "../Services/stringToArray";
import arrayLimit from "../Services/arrayLimit";
import NavbarComponent from "../Components/NavbarComponent.vue";
import BannerComponent from "../Components/BannerComponent.vue";
import BestSellersComponent from "../Components/BestSellersComponent.vue";
import IndexCategoryComponent from "../Components/IndexCategoryComponent.vue";
import FooterComponent from "../Components/FooterComponent.vue";

export default {
    name: "IndexPage",
    components: {
        NavbarComponent,
        BannerComponent,
        BestSellersComponent,
        IndexCategoryComponent,
        FooterComponent,
    },
    props: {
        categories: Array,
        bestsellers: Array,
    },
    data() {
        return {
            categoryName: "CATEGORIAS",
            arrayCategories: [],
            arrayBestsellers: [],
        };
    },
    methods: {
        getCategorySliderData() {
            this.arrayCategories = this.categories;
            this.arrayCategories.forEach((category) => {
                category.products = arrayLimit(category.products, 8);
                category.products.forEach((product) => {
                    product.imgs = stringToArray(product.imgs);
                });
            });
        },
        getBestSellersData() {
            let arrProducts = arrayLimit(this.bestsellers, 4)
            arrProducts.forEach((product) => {
                product.imgs = stringToArray(product.imgs);
            });
            this.arrayBestsellers = arrProducts;
        },
    },
    mounted() {
        this.getCategorySliderData();
        this.getBestSellersData();
    },
};
</script>
<style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
a,
p,
h1,
h2 {
    color: #645e56;
}
.section-title {
    font-family: "Roboto", sans-serif;
    font-size: 1em;
    font-weight: 300;
    padding: 15px 0 25px 25px;
    margin: 0;
}
.section-title-link {
    font-family: "Roboto", sans-serif;
    font-size: 0.8em;
    font-weight: 700;
    padding: 15px 25px 25px 0;
    margin: 0;
    text-decoration: none;
    color: #645e56;
    transition: 0.5s;
}
.section-title-link:hover {
    color: #433e37;
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
.logo {
    font-family: "brownsugar";
    font-size: 2.2em;
    padding-top: 7px;
}
.color-primary {
    color: #645e56;
    transition: 0.6s;
    transform: 0.6s;
}
.hover:hover {
    color: #433e37;
}
</style>
