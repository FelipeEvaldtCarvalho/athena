<template>
    <div class="d-flex flex-column-reverse w-100">
        <div class="slick-slider d-flex w-100">
            <img
                v-for="img in imgs"
                :key="img"
                :src="img"
                class="border"
                alt="teste"
            />
        </div>

        <div class="slick-image d-flex w-100">
            <img
                v-for="img in imgs"
                :key="img"
                :src="img"
                class="border rounded img-fluid"
                alt="teste"
            />
        </div>
    </div>
</template>
<script>
export default {
    name: "InfinityCarouselComponent",
    data() {
        return {
            imgs: [
                "/images/1.png",
                "/images/2.png",
                "/images/3.png",
                "/images/4.png",
                "/images/5.png",
                "/images/6.png",
            ],
        };
    },
    mounted() {
        $(".slick-image").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: ".slick-slider",
            zIndex: 10,
        });

        $(".slick-slider").not(".slick-initialized").slick({
            infinite: true,
            slidesToShow: 4,
            focusOnSelect: true,
            asNavFor: ".slick-image",
            prevArrow: `<button type="button" class="slick-btn zi-100 position-absolute top-50 start-2 translate-middle"><i class="bi bi-chevron-compact-left"></i></button>`,
            nextArrow: `<button type="button" class="slick-btn zi-100 position-absolute top-50 start-98 translate-middle"><i class="bi bi-chevron-compact-right"></i></button>`,
            zIndex: 10,
        });
    },
};
</script>
<style>
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
</style>
