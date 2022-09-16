<template>
    <NavbarComponent />
    <section class="d-flex flex-column p-4">
        <AllCategoriesComponent :categories="arrayCategories" />
    </section>
    <FooterComponent />
</template>

<script>
import NavbarComponent from "../Components/NavbarComponent.vue";
import FooterComponent from "../Components/FooterComponent.vue";
import AllCategoriesComponent from "../Components/AllCategoriesComponent.vue";
import arrayLimit from "../Services/arrayLimit";
import stringToArray from "../Services/stringToArray";
export default {
    components: { NavbarComponent, FooterComponent, AllCategoriesComponent },
    props: { categories: Array },
    methods: {
        setCategoriesData() {
                this.arrayCategories = this.categories;
                this.arrayCategories.forEach((category) => {
                    category.products = arrayLimit(category.products, 8);
                    category.products.forEach((product) => {
                        product.imgs = stringToArray(product.imgs);
                    });
                });
            },
    },
    mounted() {
        this.setCategoriesData();
    },
    data() {
        return {
            arrayCategories: [],
        };
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
.logo {
    font-family: "brownsugar";
    font-size: 2.2em;
    padding-top: 7px;
}
.color-primary {
    color: #645e56;
    transition: 0.6s;
}
.hover:hover {
    color: #433e37;
}
.section-category a {
    text-decoration: none;
}
.fp-100 {
    font-family: "Roboto", sans-serif;
    font-weight: 100;
}
.fp-300 {
    font-family: "Roboto", sans-serif;
    font-weight: 300;
}
.fp-700 {
    font-family: "Roboto", sans-serif;
    font-weight: 700;
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
.section-title {
    font-family: "Roboto", sans-serif;
    font-size: 1.5em;
    font-weight: 300;
    padding: 15px 0 25px 25px;
    margin: 0;
}
</style>
