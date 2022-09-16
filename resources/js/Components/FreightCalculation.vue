<template>
    <div class="py-3">
        <label class="fp-300 cp" for="cep">{{
            "Calcule seu frete".toUpperCase()
        }}</label>
        <div class="d-flex gap-2 py-3">
            <input class="rounded cep-input" type="number" />
            <button class="btn">Calcular</button>
        </div>
    </div>
</template>
<script>
export default {
    name: "FreightCalculation",
};
</script>
<style scoped>
.cep-input {
    border: 1px solid #ced4da;
    padding: 0 5px;
    width: 50%;
}
.cep-input:focus {
    outline: 1px solid #645e56;
}
input[type="number"] {
    -webkit-appearance: textfield;
    -moz-appearance: textfield;
    appearance: textfield;
}
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
}
.fp-300 {
    font-family: "Roboto", sans-serif;
    font-weight: 300;
}
.cp {
    color: #645e56;
}
.btn {
    font-family: "Roboto", sans-serif;
    font-weight: 300;
    background-color: #645e56;
    border: none;
    width: 50%;
    color: #fff;
}
.btn:hover {
    background-color: #433e37;
    border: none;
    color: #fff;
}
</style>
