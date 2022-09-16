<template>
    <section class="d-flex flex-column align-items-center p-3">
        <h1 class="fp-100 py-5">LOGIN</h1>
        <div class="py-2">
            <label id="user-label" class="fp-300" for="username">Usuário</label>
            <div
                class="d-flex align-items-center justify-content-center user-input"
            >
                <i class="bi bi-person-fill"></i>
                <input
                    name="username"
                    id="user-input"
                    type="text"
                    @focusin="upUserLabel"
                    @focusout="backUserLabel"
                />
            </div>
        </div>
        <div class="py-2">
            <label id="password-label" class="fp-300" for="password"
                >Senha</label
            >
            <div
                class="d-flex align-items-center justify-content-center password-input"
            >
                <ion-icon name="lock-closed"></ion-icon>
                <input
                    name="password"
                    type="password"
                    id="password-input"
                    @focusin="upPasswordLabel"
                    @focusout="backPasswordLabel"
                />
            </div>
            <a class="fp-700 fs-0-8em float-end py-3" href="#"
                >Esqueceu sua senha?</a
            >
        </div>
        <button class="btn fp-300 my-5">Entrar</button>
        <a class="fp-700 pb-5 mb-5" href="/registration"
            >Ainda não tenho cadastro!</a
        >
    </section>
</template>
<script>
export default {
    name: "LoginComponent",
    methods: {
        upUserLabel() {
            let label = document.getElementById("user-label");
            label.style.top = 0;
            label.style.left = 0;
            label.style.color = "#433e37";
        },
        backUserLabel() {
            let input = document.getElementById("user-input");
            let label = document.getElementById("user-label");
            if (input.value) {
                return;
            }
            label.style.top = "24px";
            label.style.left = "30px";
            label.style.color = "#645e56";
        },
        upPasswordLabel() {
            let label = document.getElementById("password-label");
            label.style.top = 0;
            label.style.left = 0;
            label.style.color = "#433e37";
        },
        backPasswordLabel() {
            let input = document.getElementById("password-input");
            let label = document.getElementById("password-label");
            if (input.value) {
                return;
            }
            label.style.top = "24px";
            label.style.left = "30px";
            label.style.color = "#645e56";
        },
    },
};
</script>
<style scoped>
* {
    color: #433e37;
}
.btn {
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
input {
    border: none;
    padding-left: 10px;
}
.user-input,
.password-input {
    border-bottom: 1px #645e56 solid;
}
#user-label,
#password-label {
    pointer-events: none;
    position: relative;
    top: 24px;
    left: 30px;
    color: #645e56;
    font-size: 0.9em;
    transition: 0.4s;
}
.user-input input:focus,
.password-input input:focus {
    outline: none;
}
.fp-100 {
    font-family: "Roboto", sans-serif;
    font-weight: 100;
}
.fp-300 {
    font-family: "Roboto", sans-serif;
    font-weight: 300;
}
.fp-700 {
    font-family: "Roboto", sans-serif;
    font-weight: 700;
}
.cp {
    color: #645e56;
}
.fs-2em {
    font-size: 2em;
}
.fs-0-8em {
    font-size: 0.8em;
}
a {
    text-decoration: none;
}
a:hover {
    color: #433e37;
}
</style>
