<template>
    <section>
        <h1 class="section-title">CATEGORIAS</h1>
        <div class="mb-5 d-flex flex-column" v-for="category in categories">
            <div class="d-flex align-items-center justify-content-between">
                <h1 class="section-title">{{ category.name }}</h1>
            </div>
            <div
                class="d-flex align-content-center justify-content-evenly flex-wrap pb-5"
            >
                <div class="w-45 my-4" v-for="product in category.products">
                    <a :href="`/product/${product.id}`">
                        <img
                            class="img-fluid rounded"
                            :src="product.imgs[0]"
                            alt=""
                        />
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
                <a class="btn mt-5" :href="`/category/${category.id}`">Ver tudo</a>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    name: "AllCategories",
    props: {
        categories: Object,
    },
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
    width: 180px;
    border: none;
    color: #fff;
}
.btn:hover {
    background-color: #433e37;
    border: none;
}
</style>
