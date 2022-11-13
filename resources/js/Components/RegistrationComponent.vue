<template>
    <section class="d-flex flex-column align-items-center p-3">
        <h1 class="fp-100 py-5">CADASTRAR</h1>
        <div class="py-2">
            <label id="name-label" class="fp-300" for="name"
                >Nome Completo</label
            >
            <div
                class="d-flex align-items-center justify-content-center name-input"
            >
                <input
                    name="username"
                    id="name-input"
                    type="text"
                    @focusin="upNameLabel"
                    @focusout="backNameLabel"
                    @change="upNameLabel"
                    autocomplete="nope"
                />
            </div>
        </div>
        <div class="py-2">
            <label id="cpf-label" class="fp-300" for="cpf">CPF</label>
            <div
                class="d-flex align-items-center justify-content-center cpf-input"
            >
                <input
                    name="cpf"
                    id="cpf-input"
                    type="text"
                    @focusin="upCpfLabel"
                    @focusout="backCpfLabel"
                    @change="upCpfLabel"
                    autocomplete="nope"
                />
            </div>
        </div>
        <div class="py-2">
            <label id="phone-label" class="fp-300" for="phone">Telefone</label>
            <div
                class="d-flex align-items-center justify-content-center phone-input"
            >
                <input
                    name="phone"
                    id="phone-input"
                    type="number"
                    @focusin="upPhoneLabel"
                    @focusout="backPhoneLabel"
                    @change="upPhoneLabel"
                    autocomplete="nope"
                />
            </div>
        </div>
        <div class="py-2">
            <label id="email-label" class="fp-300" for="phone">E-mail</label>
            <div
                class="d-flex align-items-center justify-content-center email-input"
            >
                <input
                    name="email"
                    id="email-input"
                    type="email"
                    @focusin="upEmailLabel"
                    @focusout="backEmailLabel"
                    @change="upEmailLabel"
                    autocomplete="nope"
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
                <input
                    name="password"
                    type="password"
                    id="password-input"
                    @focusin="upPasswordLabel"
                    @focusout="backPasswordLabel"
                />
            </div>
        </div>
        <button class="btn fp-300 my-5">Cadastrar</button>
        <a class="fp-700 pb-5 mb-5" href="/login">Ja possuo cadastro!</a>
    </section>
</template>
<script>
export default {
    name: "RegistrationComponent",
    methods: {
        upNameLabel() {
            let label = document.getElementById("name-label");
            label.style.top = 0;
            label.style.color = "#433e37";
        },
        backNameLabel() {
            let input = document.getElementById("name-input");
            let label = document.getElementById("name-label");
            if (input.value) {
                return;
            }
            label.style.top = "24px";
            label.style.color = "#645e56";
        },
        upCpfLabel() {
            let label = document.getElementById("cpf-label");
            label.style.top = 0;
            label.style.color = "#433e37";
        },
        backCpfLabel() {
            let input = document.getElementById("cpf-input");
            let label = document.getElementById("cpf-label");
            if (input.value) {
                return;
            }
            label.style.top = "24px";
            label.style.color = "#645e56";
        },
        upPhoneLabel() {
            let label = document.getElementById("phone-label");
            label.style.top = 0;
            label.style.color = "#433e37";
        },
        backPhoneLabel() {
            let input = document.getElementById("phone-input");
            let label = document.getElementById("phone-label");
            if (input.value) {
                return;
            }
            label.style.top = "24px";
            label.style.color = "#645e56";
        },
        upEmailLabel() {
            let label = document.getElementById("email-label");
            label.style.top = 0;
            label.style.color = "#433e37";
        },
        backEmailLabel() {
            let input = document.getElementById("email-input");
            let label = document.getElementById("email-label");
            if (input.value) {
                return;
            }
            label.style.top = "24px";
            label.style.color = "#645e56";
        },
        upPasswordLabel() {
            let label = document.getElementById("password-label");
            label.style.top = 0;
            label.style.color = "#433e37";
        },
        backPasswordLabel() {
            let input = document.getElementById("password-input");
            let label = document.getElementById("password-label");
            if (input.value) {
                return;
            }
            label.style.top = "24px";
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
.name-input,
.cpf-input,
.phone-input,
.email-input,
.password-input {
    border-bottom: 1px #645e56 solid;
}
#name-label,
#cpf-label,
#phone-label,
#email-label,
#password-label {
    pointer-events: none;
    position: relative;
    top: 24px;
    color: #645e56;
    font-size: 0.9em;
    transition: 0.4s;
}
.name-input input:focus,
.cpf-input input:focus,
.email-input input:focus,
.phone-input input:focus,
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
