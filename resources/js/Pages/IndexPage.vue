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
