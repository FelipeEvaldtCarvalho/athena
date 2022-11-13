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
<style >
a{
    text-decoration: none;
    color: #645e56;
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
.menu-close a {
    color: #ffffff;
}
</style>
