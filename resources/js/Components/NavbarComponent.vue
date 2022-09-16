<template>
    <nav class="d-flex justify-content-between align-items-center position-relative">
        <a class="menu" @click="menuModalVisibility" href="#"
            ><i class="bi bi-list"></i
        ></a>
        <div class="d-flex flex-column justify-content-between align-items-center position-relative">
            <a v-if="!searchActive" id="logo" class="logo position-relative top-50" href="/">Athena</a>
            <div v-if="searchActive" id="search" class="d-flex justify-content-center">
                <input type="text" class="rounded" id="search-input" />
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center gap-2">
            <div class="d-flex justify-content-between align-items-center gap-2">
                <a
                    class="nav-icons"
                    @click="
                        openSearch()
                        //searchActive = !searchActive;
                    "
                    href="#"
                    ><i class="bi bi-search"></i
                ></a>
            </div>
            <a class="nav-icons" href="/cart"><i class="bi bi-bag-fill"></i></a>
        </div>
    </nav>
    <SideMenuComponent @closeModal="closeModal" :menumodal="menumodal" />
</template>
<script>
import SideMenuComponent from "./SideMenuComponent.vue";
export default {
    name: "NavbarComponent",
    components: {
        SideMenuComponent,
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
        openSearch() {
            if(!this.searchActive) {
                document.getElementById('logo').style.opacity = 0;
                setTimeout(() => this.searchActive = !this.searchActive, 600)
                setTimeout(()=> {
                    document.getElementById('search').style.opacity = 1;
                }, 600);
            } else {
                document.getElementById('search').style.opacity = 0;
                setTimeout(() => this.searchActive = !this.searchActive, 600)
                setTimeout(()=> {
                    document.getElementById('logo').style.opacity = 1;
                }, 600);
            }
        },
    },
};
</script>
<style scoped>
@font-face {
    font-family: "brownsugar";
    src: url("/css/brownsugar.ttf");
}

nav {
    height: 100px;
    background-color: #d6d4ce;
    padding: 15px;
}
.menu {
    font-size: 2.5em;
}
.nav-icons {
    font-size: 1.5em;
}
a {
    text-decoration: none;
    color: #645e56;
    transition: 0.5s;
}
a:hover {
    color: #433e37;
}
#search {
    width: 100%;
    opacity: 0;
    transition: .6s ease;
}
#search-input {
    width: 80%;
}
#search-input:focus {
    outline: 1px #645e56 solid;
}
</style>
