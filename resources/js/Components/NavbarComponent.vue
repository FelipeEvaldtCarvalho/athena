<template>
    <nav class="d-flex flex-column w-100">
        <div class="d-flex justify-content-between align-items-center">
            <a class="menu" @click="menuModalVisibility"><i class="bi bi-list"></i></a>
            <a id="logo" class="logo" href="/">Athena</a>
            <a class="nav-icons" href="/cart"><i class="bi bi-bag-fill"></i></a>
        </div>
        <div class="d-flex align-items-center gap-2 w-100 rounded bg-white px-2">
            <a class="search-icons" href="#"><i class="bi bi-search"></i></a>
            <input type="text" class="rounded w-100">
            <a class="search-icons" href="#"><i class="bi bi-x-lg"></i></a>
        </div>
    </nav>
    <SideMenuComponent @closeModal="closeModal" :menumodal="menumodal" />
</template>
<script>
import SideMenuComponent from "./SideMenuComponent.vue";
import { Link } from '@inertiajs/inertia-vue3';
export default {
    name: "NavbarComponent",
    components: {
        SideMenuComponent,
        Link
    },
    data() {
        return {
            menumodal: false,
            searchActive: false,
        };
    },
    methods: {
        menuModalVisibility() {
            this.menumodal = !this.menumodal;
            let slick = document.getElementById("slick-carousel");
            if (slick) {
                slick.style.zIndex = "-1";
            }
        },
        closeModal() {
            this.menumodal = false;
        },
    },
};
</script>
<style scoped>
nav {
    background-color: #d6d4ce;
    padding: 15px;
}
.menu {
    font-size: 2.5em;
}
.nav-icons {
    font-size: 1.5em;
}
.search-icons {
    font-size: 1em;
}
a {
    text-decoration: none;
    color: #645e56;
    transition: 0.5s;
}
a:hover {
    color: #433e37;
}
input{
    border: none;
    padding: 5px 0;
    font-size: 1em;
}
input:focus{
    outline: none;
}
</style>
