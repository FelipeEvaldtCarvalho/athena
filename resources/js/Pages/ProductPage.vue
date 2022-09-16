<template>
    <NavbarComponent />
    <section class="d-flex flex-column p-4">
        <p class="section-category pb-5"><a href="/categories">Categorias</a>
             <i class="bi bi-arrow-right-short"></i><a :href="`/category/${category.id}`">{{ category.name }}</a>
            <i class="bi bi-arrow-right-short"></i> {{ product.name }}
        </p>
        <h1 class="product-name fs-2em py-3">
            {{ product.name.toUpperCase() }}
        </h1>
        <div class="d-flex flex-column-reverse w-100" id="slick-carousel">
            <div class="d-flex position-relative flex-column py-2 w-100">
                <div class="slider slick-slider d-flex w-100">
                    <img
                        v-for="img in imgs"
                        :key="img"
                        :src="img"
                        class="border"
                        alt="teste"
                    />
                </div>
            </div>
            <div class="d-flex position-relative flex-column py-2 w-100">
                <div class="slider slick-image d-flex w-100">
                    <img
                        v-for="img in imgs"
                        :key="img"
                        :src="img"
                        class="border"
                        alt="teste"
                    />
                </div>
            </div>
        </div>
        <p class="product-price fs-1-5em">
            {{
                product.price.toLocaleString("pt-br", {
                    style: "currency",
                    currency: "BRL",
                })
            }}
        </p>
        <div class="d-flex align-items-center justify-content-between">
            <span class="d-flex align-items-center gap-3">
                <p class="m-0 fp-300">Quantidade</p>
                <NumberInput
                    :min="1"
                    v-model="amount"
                    :value="amount"
                    @increment="amount++"
                    @decrement="amount--"
                />
            </span>
            <button class="btn">Comprar</button>
        </div>
        <FreightCalculation />
        <div class="py-4">
            <h2 class="fp-100">
                {{ "Descrição".toUpperCase() }}
            </h2>
            <p class="fp-300">
                {{ product.detail }}
            </p>
        </div>
    </section>
    <IndexCategoryComponent
        :categories="categorySlider"
        :title="sliderTitle"
        :subtitleActive="true"
        :linkActive="true"
    />
    <FooterComponent />
</template>
<script>
import stringToArray from "../Services/stringToArray";
import arrayLimit from "../Services/arrayLimit";
import NavbarComponent from "../Components/NavbarComponent.vue";
import FooterComponent from "../Components/FooterComponent.vue";
import IndexCategoryComponent from "../Components/IndexCategoryComponent.vue";
import NumberInput from "../Components/NumberInput.vue";
import FreightCalculation from "../Components/FreightCalculation.vue";
export default {
    name: "ProductPage",
    components: {
        NavbarComponent,
        FooterComponent,
        IndexCategoryComponent,
        NumberInput,
        FreightCalculation,
    },
    props: {
        product: Object,
        category: Object,
    },
    data() {
        return {
            categorySlider: [],
            amount: 1,
            sliderTitle: "Veja mais da categoria",
            imgs: [],
        };
    },
    created() {
        this.getCategorySliderData();
        this.imgs = stringToArray(this.product.imgs);
    },
    mounted() {
        this.initSlick();
    },
    methods: {
        getCategorySliderData() {

            this.categorySlider = this.category;
            this.categorySlider.products = arrayLimit(this.categorySlider.products, 8);
            this.categorySlider.products.forEach( item => { item.imgs = stringToArray(item.imgs)})
            this.categorySlider = [this.category];
        },
        initSlick() {
            $(".slick-image").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: ".slick-slider",
                zIndex: 1,
            });

            $(".slick-slider").not(".slick-initialized").slick({
                infinite: true,
                slidesToShow: 4,
                focusOnSelect: true,
                swipeToSlide: true,
                asNavFor: ".slick-image",
                prevArrow: `<button type="button" class="slick-btn zi-100 position-absolute top-50 start-2 translate-middle"><i class="bi bi-chevron-compact-left"></i></button>`,
                nextArrow: `<button type="button" class="slick-btn zi-100 position-absolute top-50 start-98 translate-middle"><i class="bi bi-chevron-compact-right"></i></button>`,
                zIndex: 1,
            });
        },
    },
};
</script>
<style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
p,
h1,
h2 {
    color: #645e56;
}
.section-category {
    font-family: "Roboto", sans-serif;
    font-size: 1em;
    font-weight: 300;
    margin: 0;
}
.section-title {
    font-family: "Roboto", sans-serif;
    font-size: 1em;
    font-weight: 300;
    padding: 15px 0 25px 25px;
    margin: 0;
}

.section-category a{
    text-decoration: none;
    color: #645e56;
}
.section-category a:hover{
    color: #433e37;
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
.fs-2em {
    font-size: 2em;
}
.fs-1-5em {
    font-size: 1.5em;
}
.product-price {
    font-family: "Roboto", sans-serif;
    font-weight: 700;
    padding-top: 5px;
    margin: 0;
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
.amount-input {
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
}
.cep-input {
    border: 1px solid #ced4da;
    padding: 0 5px;
    width: 50%;
}
.cep-input:focus {
    outline: 1px solid #645e56;
}
input[type="number"] {
    -webkit-appearance: textfield;
    -moz-appearance: textfield;
    appearance: textfield;
}
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
}
.btn {
    font-family: "Roboto", sans-serif;
    font-weight: 300;
    background-color: #645e56;
    border: none;
    width: 50%;
    color: #fff;
}
.btn:hover {
    background-color: #433e37;
    border: none;
    color: #fff;
}
.slick-btn {
    background-color: transparent;
    border: none;
    font-size: 2em;
}
.start-98 {
    left: 98%;
}
.start-2 {
    left: 2%;
}
.zi-100 {
    z-index: 100;
}
.menu-close a {
    color: #ffffff;
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
.cp {
    color: #645e56;
}
</style>
