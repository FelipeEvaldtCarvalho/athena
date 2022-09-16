<template>
    <NavbarComponent />
    <LoginComponent />
    <FooterComponent />
</template>
<script>
import NavbarComponent from "../Components/NavbarComponent.vue";
import FooterComponent from "../Components/FooterComponent.vue";
import LoginComponent from "../Components/LoginComponent.vue";
export default {
    name: "LoginPage",
    components: {
        NavbarComponent,
        FooterComponent,
        LoginComponent,
    },
};
</script>
<style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
.section-title {
    font-family: "Roboto", sans-serif;
    font-size: 1em;
    font-weight: 300;
    padding: 15px 0 25px 25px;
    margin: 0;
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
