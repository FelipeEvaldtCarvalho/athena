<template>
    <NavbarComponent />
    <CartComponent />
</template>
<script>
import NavbarComponent from "../Components/NavbarComponent.vue";
import CartComponent from "../Components/CartComponent.vue";
export default {
    components: { NavbarComponent, CartComponent },
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
h2,
h3 {
    color: #645e56;
    padding: 0;
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
</style>
