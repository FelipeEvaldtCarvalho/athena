<template>
    <footer class="p-5">
        <h4 class="footer-text text-center pb-2">
            Acompanhe nossas novidades!
        </h4>
        <p class="footer-text text-center pb-4">
            Cadastre seu e-mail para receber informações exclusivas
        </p>
        <div class="input-group mb-3">
            <input
                type="text"
                class="newsletter-input form-control form-control-sm"
                placeholder="Digite seu e-mail"
                aria-label="Digite seu e-mail"
                aria-describedby="button-addon2"
            />
            <button class="btn p-2" type="button" id="button-addon2">
                Cadastrar
            </button>
        </div>
        <ul class="footer-links py-4">
            <li class="py-1">
                <a href="/bestsellers">Mais Vendidos</a>
            </li>
            <li class="py-1">
                <a href="/categories">Categorias</a>
            </li>
            <li class="py-1">
                <a href="#">Contato</a>
            </li>
        </ul>
        <h1 class="logo color-primary text-center">Athena</h1>
        <p class="color-primary text-center copy">
            Copyright &copy; 2022, todos os direitos reservados.
        </p>
        <div class="d-flex align-items-center justify-content-evenly">
            <a
                class="h1 color-primary hover"
                target="_blank"
                href="https://www.instagram.com/athenasemi_joias/"
                ><i class="bi bi-instagram"></i
            ></a>
            <a
                class="h1 color-primary hover"
                target="_blank"
                href="https://api.whatsapp.com/message/5PLHGRJGEYTYI1?autoload=1&app_absent=0"
                ><i class="bi bi-whatsapp"></i
            ></a>
        </div>
    </footer>
</template>
<script>
export default {
    name: "FooterComponent",
};
</script>
<style scoped>
footer {
    background-color: #d6d4ce;
}
.footer-text {
    font-family: "Roboto", sans-serif;
    font-weight: 300;
    margin: 0;
    color: #645e56;
}
.newsletter-input {
    font-size: 0.7em;
}
.newsletter-input:focus {
    outline: 1px solid #645e56c3;
    box-shadow: none;
    border: 1px #fff solid;
}
.btn {
    font-family: "Roboto", sans-serif;
    font-weight: 300;
    font-size: 0.7em;
    background-color: #645e56;
    color: #ffffff;
    border: none;
    transition: 0.5s;
}
.btn:hover {
    background-color: #433e37;
    border: none;
}
.footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}
.copy {
    font-size: 0.9em;
    font-family: "Roboto", sans-serif;
    font-weight: 100;
}
.footer-links a {
    text-decoration: none;
    font-family: "Roboto", sans-serif;
    font-weight: 700;
    font-size: 0.8em;
    color: #645e56;
    transition: 0.5s;
}
.footer-links a:hover {
    color: #433e37;
}
</style>
