<template>
    <div>
        <h1 v-if="title" class="section-title fp-100">{{ title }}</h1>
        <div class="mb-5 d-flex flex-column" v-for="category in categories">
            <div class="d-flex align-items-center justify-content-between">
                <h1 v-if="subtitleActive" class="section-title">
                    {{ category.name }}
                </h1>
                <a v-if="linkActive" class="section-title-link" :href="`/category/${category.id}`"
                    >Ver tudo<i class="bi bi-chevron-double-right"></i
                ></a>
            </div>
            <div class="horizontal-scroll d-flex gap-3">
                <div
                    class="product-card d-flex flex-column"
                    v-for="product in category.products"
                >
                    <div class="product-img">
                        <a :href="`/product/${product.id}`">
                            <img
                                class="rounded img-fluid"
                                :src="product.imgs[0]"
                                :alt="product.name"
                            />
                        </a>
                    </div>
                    <p class="product-name">
                        <a :href="`/product/${product.id}`">
                            {{ product.name.toUpperCase() }}
                        </a>
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
        </div>
    </div>
</template>
<script>
export default {
    name: "IndexCategoryComponent",
    props: {
        categories: Array,
        title: String,
        linkActive: Boolean,
        subtitleActive: Boolean,
    },
    data() {
        return {
            arrayCategories: [],
        };
    },
};
</script>
<style scoped>
.horizontal-scroll {
    overflow: auto;
    white-space: nowrap;
    padding: 20px;
}
.horizontal-scroll::-webkit-scrollbar {
    display: none;
}
.product-img {
    width: 33vw;
}
.section-title {
    font-family: "Roboto", sans-serif;
    font-size: 1.5em;
    font-weight: 300;
    padding: 15px 0 25px 25px;
    margin: 0;
    color: #645e56;
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
    color: #645e56;
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
    color: #645e56;
}
.product-price a {
    text-decoration: none;
    color: #645e56;
}
.fp-100 {
    font-family: "Roboto", sans-serif;
    font-weight: 100;
    color: #645e56;
}
.fp-300 {
    font-family: "Roboto", sans-serif;
    font-weight: 300;
    color: #645e56;
}
.fp-700 {
    font-family: "Roboto", sans-serif;
    font-weight: 700;
    color: #645e56;
}
</style>
