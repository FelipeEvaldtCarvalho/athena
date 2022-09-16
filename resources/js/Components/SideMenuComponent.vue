<template>
    <transition name="slide">
        <div class="menu-modal d-flex zi-1000 w-85" v-if="menumodal">
            <div class="menu-list d-flex flex-column w-100">
                <div
                    class="d-flex flex-column align-items-center justify-content-center p-4"
                >
                    <a class="btn w-100" href="/login">ENTRAR</a>
                    <p>Ainda não tem conta?</p>
                    <a
                        class="link-cadastro text-decoration-none"
                        href="/registration"
                        >Cadastra-se aqui</a
                    >
                </div>
                <ul>
                    <a class="text-decoration-none" href="/bestsellers"
                        ><li>Mais Vendidos</li></a
                    >
                    <a class="text-decoration-none" href="/news"
                        ><li>Lançamentos</li></a
                    >
                    <a class="text-decoration-none" href="/category"
                        ><li>Anéis</li></a
                    >
                    <a class="text-decoration-none" href="/category"
                        ><li>Colares</li></a
                    >
                    <a class="text-decoration-none" href="/category"
                        ><li>Pulseiras</li></a
                    >
                </ul>
            </div>
        </div>
    </transition>
    <transition name="close">
        <div class="w-100 d-flex" v-if="menumodal" @click="$emit('closeModal')">
            <div class="menu-close zi-900 w-100 justify-content-end">
                <div class="d-flex w-15 justify-content-center">
                    <a href="#" class="zi-1000" @click="$emit('closeModal')"
                        ><i class="bi bi-x-circle-fill"></i
                    ></a>
                </div>
            </div>
        </div>
    </transition>
</template>
<script>
export default {
    name: "SideMenuComponent",
    props: { menumodal: Boolean },
    emits: ["closeModal"],
    methods: {},
    created() {
        this.$emit("closeModal");
    },
};
</script>
<style scoped>
.menu-modal {
    height: 100vh;
    width: 100%;
    position: fixed;
    top: 0;
}
.menu-list {
    background-color: #ffffff;
}
.menu-close {
    height: 100vh;
    position: fixed;
    top: 0;
    background-color: #000000d8;
    font-size: 2em;
    padding-top: 15px;
    display: flex;
}
.link-cadastro {
    color: #645e56;
    font-weight: 800;
    transition: 0.5s;
}
.link-cadastro:hover {
    color: #433e37;
}
.menu-close a {
    color: #ffffff;
}
.w-85 {
    width: 85%;
}
.w-15 {
    width: 15%;
}
p {
    margin: 0;
    margin-top: 15px;
    font-size: 0.8em;
    font-family: "Roboto", sans-serif;
}
ul {
    padding: 0;
    border-top: 1px solid #d6d4ce;
    list-style: none;
}
li {
    border-bottom: 1px solid #d6d4ce;
    width: 100%;
    padding-left: 30px;
    padding: 10px 0 10px 30px;
}
a li {
    font-family: "Roboto", sans-serif;
    color: #000000;
}
ul:last-child {
    border-bottom: none;
}
.btn {
    background-color: #645e56;
    color: #ffffff;
    border: none;
    transition: 0.5s;
}
.btn:hover {
    background-color: #433e37;
    border: none;
}
a .btn:hover {
    background-color: #433e37;
    border: none;
}
.slide-enter-active,
.slide-leave-active {
    transition: transform 0.6s ease;
    z-index: 900;
}
.slide-enter-from,
.slide-leave-to {
    transform: translateX(-100%);
    transition: all 0.6s ease-in 0s;
    z-index: 900;
}

.close-enter-active,
.close-leave-active {
    transition: opacity 0.6s ease;
    z-index: 900;
}

.close-enter-from,
.close-leave-to {
    opacity: 0;
}
.zi-900 {
    z-index: 900;
}
.zi-1000 {
    z-index: 1000;
}
.menu-close a {
    color: #ffffff !important;
}
</style>
