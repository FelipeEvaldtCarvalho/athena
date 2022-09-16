<template>
    <div class="bestseller">
        <h1 class="section-title">MAIS VENDIDOS</h1>
        <div
            class="d-flex align-content-center justify-content-evenly flex-wrap"
        >
            <div class="w-45 mt-4" v-for="product in bestsellers">
                <a :href="`/product/${product.id}`">
                    <img
                        class="img-fluid rounded"
                        :src="product.imgs[0]"
                        alt=""
                    />
                </a>
                <a href=""></a>
                <p class="product-name">
                    <a :href="`/product/${product.id}`">{{
                        product.name.toUpperCase()
                    }}</a>
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
        <div
            class="container-fluid d-flex align-content-center justify-content-evenly my-5"
        >
            <a href="/bestsellers" class="btn">Veja mais</a>
        </div>
    </div>
</template>
<script>
export default {
    name: "BestSellersComponent",
    props: {
        bestsellers: Array,
    },
    data() {
        return {
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
                    name: "anel tigos",
                    price: 130.9,
                    pic: "/images/anel-teste.png",
                },
            ],
        };
    },
};
</script>
<style scoped>
.w-45 {
    width: 45%;
}
.btn {
    font-family: "Roboto", sans-serif;
    font-weight: 300;
    background-color: #645e56;
    color: #ffffff;
    border: none;
    transition: 0.5s;
    width: 180px;
}
.btn:hover {
    background-color: #433e37;
    border: none;
}
</style>
