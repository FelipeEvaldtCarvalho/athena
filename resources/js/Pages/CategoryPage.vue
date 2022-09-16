<template>
    <NavbarComponent />
    <section class="d-flex flex-column p-4">
        <div class="section-category d-flex align-items-center pb-5">
            <a class="fp-300 color-primary hover" href="/categories"
                >Categorias</a
            >
            <i class="bi bi-arrow-right-short"></i>
            <a class="fp-300 color-primary hover" :href="`/category/${category.id}`">{{ category.name }}</a>
        </div>
        <h1 class="section-title fp-100">{{ category.name.toUpperCase() }}</h1>
    </section>
    <IndexCategoryComponent
        :categories="[newsInCategoryData]"
        :title="sliderTitle"
        :linkActive="false"
        :subtitleActive="false"
    />
        <CategoryComponent :products="products" :category="exempleCategory" />
    <FooterComponent />
</template>
<script>
import stringToArray from "../Services/stringToArray";
import IndexCategoryComponent from "../Components/IndexCategoryComponent.vue";
import NavbarComponent from "../Components/NavbarComponent.vue";
import FooterComponent from "../Components/FooterComponent.vue";
import CategoryComponent from "../Components/CategoryComponent.vue";
export default {
    components: {
        IndexCategoryComponent,
        NavbarComponent,
        FooterComponent,
        CategoryComponent,
    },
    props:{
        category: Object,
        products: Object,
        newsInCategory: Object
    },
    methods: {
        getNewsData() {
            this.newsInCategoryData.id = this.category.id
            this.newsInCategoryData.name = this.category.name
            this.newsInCategoryData.products = this.newsInCategory
            this.newsInCategoryData.products.forEach( product => {
                product.imgs = stringToArray(product.imgs);
            })
        }
    },
    mounted() {
        this.getNewsData();
    },
    data() {
        return {
            sliderTitle: "Novidades da categoria",
            newsInCategoryData: {},
            exempleCategory: {
                name: "Aneis",
                items: [
                    {
                        name: "anel gold",
                        price: 150.9,
                        pic: "/images/anel-teste.png",
                    },
                    {
                        name: "anel tigas",
                        price: 180.9,
                        pic: "/images/anel-teste.png",
                    },
                    {
                        name: "anel rigas",
                        price: 140.9,
                        pic: "/images/anel-teste.png",
                    },
                    {
                        name: "anel tigos",
                        price: 130.9,
                        pic: "/images/anel-teste.png",
                    },
                    {
                        name: "anel bigas",
                        price: 140.9,
                        pic: "/images/anel-teste.png",
                    },
                    {
                        name: "anel rigos",
                        price: 130.9,
                        pic: "/images/anel-teste.png",
                    },
                    {
                        name: "anel gold",
                        price: 150.9,
                        pic: "/images/anel-teste.png",
                    },
                    {
                        name: "anel tigas",
                        price: 180.9,
                        pic: "/images/anel-teste.png",
                    },
                ],
            },
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
</style>
