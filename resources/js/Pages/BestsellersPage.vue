<template>
    <NavbarComponent />
    <section class="d-flex flex-column p-4">
        <div class="section-category d-flex align-items-center pb-5">
            <a class="fp-300 color-primary hover" href="/categories"
                >Categorias</a
            >
            <i class="bi bi-arrow-right-short"></i>
            <a class="fp-300 color-primary hover" href="/bestsellers"
                >Mais vendidos</a
            >
        </div>
        <h1 class="section-title">OS MAIS VENDIDOS DA ATHENA</h1>
        <div
            class="d-flex align-content-center justify-content-evenly flex-wrap pb-5"
        >
            <div class="w-45 mt-4" v-for="product in bestsellersProducts">
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
        <IndexCategoryComponent
            :categories="arrayCategories"
            :title="sliderTitle"
            :subtitleActive="true"
            :linkActive="true"
        />
    </section>
    <FooterComponent />
</template>

<script>
import NavbarComponent from "../Components/NavbarComponent.vue";
import FooterComponent from "../Components/FooterComponent.vue";
import IndexCategoryComponent from "../Components/IndexCategoryComponent.vue";
import stringToArray from "../Services/stringToArray";
import arrayLimit from "../Services/arrayLimit";
export default {
    components: { NavbarComponent, FooterComponent, IndexCategoryComponent },
    props: {
        bestsellers: Object,
        categories: Object
    },
    methods: {
        getBestsellersData() {
            this.bestsellersProducts = this.bestsellers;
            this.bestsellersProducts.forEach( product => {
                product.imgs = stringToArray(product.imgs);
            })
        },
        getCategorySliderData() {
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
        this.getBestsellersData();
        this.getCategorySliderData();
    },
    data() {
        return {
            bestsellersProducts: [],
            arrayCategories: [],
            sliderTitle: "Categorias",
            productsFront: [
                {
                    name: "anel gold",
                    price: 150.9,
                    pic: "/images/anel-teste.png",
                },
                {
                    name: "pulseira tigas",
                    price: 180.9,
                    pic: "/images/pulseira-teste.png",
                },
                {
                    name: "colar rigas",
                    price: 140.9,
                    pic: "/images/colar-teste.png",
                },
                {
                    name: "anel gold",
                    price: 150.9,
                    pic: "/images/anel-teste.png",
                },
                {
                    name: "pulseira tigas",
                    price: 180.9,
                    pic: "/images/pulseira-teste.png",
                },
                {
                    name: "colar rigas",
                    price: 140.9,
                    pic: "/images/colar-teste.png",
                },
                {
                    name: "anel gold",
                    price: 150.9,
                    pic: "/images/anel-teste.png",
                },
                {
                    name: "pulseira tigas",
                    price: 180.9,
                    pic: "/images/pulseira-teste.png",
                },
                {
                    name: "colar rigas",
                    price: 140.9,
                    pic: "/images/colar-teste.png",
                },
                {
                    name: "anel gold",
                    price: 150.9,
                    pic: "/images/anel-teste.png",
                },
                {
                    name: "pulseira tigas",
                    price: 180.9,
                    pic: "/images/pulseira-teste.png",
                },
                {
                    name: "colar rigas",
                    price: 140.9,
                    pic: "/images/colar-teste.png",
                },
                {
                    name: "anel gold",
                    price: 150.9,
                    pic: "/images/anel-teste.png",
                },
                {
                    name: "pulseira tigas",
                    price: 180.9,
                    pic: "/images/pulseira-teste.png",
                },
                {
                    name: "colar rigas",
                    price: 140.9,
                    pic: "/images/colar-teste.png",
                },
                {
                    name: "anel gold",
                    price: 150.9,
                    pic: "/images/anel-teste.png",
                },
                {
                    name: "pulseira tigas",
                    price: 180.9,
                    pic: "/images/pulseira-teste.png",
                },
                {
                    name: "colar rigas",
                    price: 140.9,
                    pic: "/images/colar-teste.png",
                },
                {
                    name: "anel gold",
                    price: 150.9,
                    pic: "/images/anel-teste.png",
                },
                {
                    name: "pulseira tigas",
                    price: 180.9,
                    pic: "/images/pulseira-teste.png",
                },
            ],
            exempleCategory: [
                {
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
                    ],
                },
                {
                    name: "Colares",
                    items: [
                        {
                            name: "Colar gold",
                            price: 150.9,
                            pic: "/images/colar-teste.png",
                        },
                        {
                            name: "Colar tigas",
                            price: 180.9,
                            pic: "/images/colar-teste.png",
                        },
                        {
                            name: "Colar rigas",
                            price: 140.9,
                            pic: "/images/colar-teste.png",
                        },
                        {
                            name: "Colar tigos",
                            price: 130.9,
                            pic: "/images/colar-teste.png",
                        },
                        {
                            name: "Colar bigas",
                            price: 140.9,
                            pic: "/images/colar-teste.png",
                        },
                        {
                            name: "Colar rigos",
                            price: 130.9,
                            pic: "/images/colar-teste.png",
                        },
                    ],
                },
                {
                    name: "Pulseiras",
                    items: [
                        {
                            name: "Pulseiras gold",
                            price: 150.9,
                            pic: "/images/pulseira-teste.png",
                        },
                        {
                            name: "Pulseiras tigas",
                            price: 180.9,
                            pic: "/images/pulseira-teste.png",
                        },
                        {
                            name: "Pulseiras rigas",
                            price: 140.9,
                            pic: "/images/pulseira-teste.png",
                        },
                        {
                            name: "Pulseiras tigos",
                            price: 130.9,
                            pic: "/images/pulseira-teste.png",
                        },
                        {
                            name: "Pulseiras bigas",
                            price: 140.9,
                            pic: "/images/pulseira-teste.png",
                        },
                        {
                            name: "Pulseiras rigos",
                            price: 130.9,
                            pic: "/images/pulseira-teste.png",
                        },
                    ],
                },
            ],
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
    transform: 0.6s;
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
