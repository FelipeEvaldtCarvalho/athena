<template>
    <section class="m-4 mb-0">
        <h1 class="text-center fp-100">MINHA SACOLA</h1>
        <div class="my-4">
            <div v-if="!cart.length">
                <h3 class="text-center fp-100">
                    Ainda não tem item em sua sacola!
                </h3>
                <div
                    class="d-flex flex-column justify-content-center align-items-center my-5 gap-5"
                >
                    <a class="btn" href="/categories">Voltar a Loja</a>
                </div>
            </div>
            <div
                v-if="cart.length"
                v-for="item in cart"
                class="product-card rounded position-relative mb-4"
            >
                <div class="w-25">
                    <img :src="item.pic" alt="teste" class="img-card rounded" />
                </div>
                <div class="d-flex w-75 flex-column p-3 gap-2">
                    <h4 class="fp-300">{{ item.name }}</h4>
                    <div class="d-flex justify-content-between">
                        <NumberInput
                            :min="0"
                            v-model="item.qtd"
                            :value="item.qtd"
                            @increment="item.qtd++"
                            @decrement="item.qtd--"
                            @zero="removeItem(item.id)"
                        />
                        <h5 class="fp-300">
                            {{
                                (item.price * item.qtd).toLocaleString(
                                    "pt-br",
                                    {
                                        style: "currency",
                                        currency: "BRL",
                                    }
                                )
                            }}
                        </h5>
                    </div>
                </div>
                <div class="position-absolute top-0 end-0">
                    <span
                        @click="removeItemConfirm(item.id)"
                        class="remove-item-btn"
                        ><i class="bi bi-x"></i
                    ></span>
                </div>
            </div>
            <FreightCalculation />
        </div>
    </section>
    <div class="resume-cart d-flex flex-column px-5">
        <h2 class="text-center fp-100 mb-5">
            {{ cart.length }} itens na sacola
        </h2>
        <div class="d-flex justify-content-between">
            <h5 class="fp-300">Sub total</h5>
            <h5 class="fp-300">
                {{
                    subtotal().toLocaleString("pt-br", {
                        style: "currency",
                        currency: "BRL",
                    })
                }}
            </h5>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
            <h5 class="fp-300">Frete</h5>
            <h5 class="fp-300">
                {{
                    this.shipping.toLocaleString("pt-br", {
                        style: "currency",
                        currency: "BRL",
                    })
                }}
            </h5>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
            <h5 class="fp-300">total</h5>
            <h5 class="fp-300">
                {{
                    total().toLocaleString("pt-br", {
                        style: "currency",
                        currency: "BRL",
                    })
                }}
            </h5>
        </div>
        <div
            class="d-flex flex-column justify-content-center align-items-center my-5 gap-5"
        >
            <button class="btn">Finalizar a compra</button>
            <button class="btn btn-sec">Continuar Comprando</button>
        </div>
    </div>
</template>
<script>
import NumberInput from "../Components/NumberInput.vue";
import FreightCalculation from "../Components/FreightCalculation.vue";
export default {
    name: "CartComponent",
    components: {
        NumberInput,
        FreightCalculation,
    },
    data() {
        return {
            teste: 1,
            shipping: 10,
            cart: [
                {
                    id: 1,
                    name: "Anel tigas",
                    pic: "/images/anel-teste.png",
                    price: 100.0,
                    qtd: 5,
                },
                {
                    id: 2,
                    name: "Colar tigas",
                    pic: "/images/colar-teste.png",
                    price: 150.0,
                    qtd: 1,
                },
                {
                    id: 3,
                    name: "Pulseira tigas",
                    pic: "/images/pulseira-teste.png",
                    price: 90.0,
                    qtd: 1,
                },
            ],
        };
    },
    methods: {
        removeItem(id) {
            var newArray = this.cart.filter((item) => item.id !== id);
            this.cart = newArray;
            console.log(newArray);
        },
        removeItemConfirm(id) {
            let alert = confirm("Deletar item?");
            if (!alert) {
                return;
            }
            var newArray = this.cart.filter((item) => item.id !== id);
            this.cart = newArray;
            console.log(newArray);
        },
        subtotal() {
            const cart = this.cart;
            let subtotal = 0;
            cart.forEach((item) => {
                subtotal += item.price * item.qtd;
            });
            return subtotal;
        },
        total() {
            let total = this.subtotal() + this.shipping;
            return total;
        },
    },
};
</script>
<style scopd>
.product-card {
    display: flex;
    width: 100%;
    --webkit-box-shadow: 0px 0px 9px 2px #433e3739;
    box-shadow: 0px 0px 9px 2px #433e3739;
    transition: 0.5s;
}
.product-card:hover {
    --webkit-box-shadow: 0px 0px 9px 2px #433e3762;
    box-shadow: 0px 0px 9px 2px #433e3762;
}
.img-card {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.resume-cart {
    background-color: #d6d4ce;
    border-top-right-radius: 1rem;
    border-top-left-radius: 1rem;
    padding: 1em;
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
.fp-100,
.fp-300,
.fp-700 {
    color: #645e56;
    padding: 0;
    margin: 0;
}
.remove-item-btn {
    padding: 4px;
    background-color: #645e56;
    border-top-right-radius: 0.375rem;
    border-bottom-left-radius: 0.375rem;
    color: #fff;
    cursor: pointer;
}
.remove-item-btn:hover {
    background-color: #433e37;
}
.remove-item-btn i {
    color: #fff;
}
.btn {
    font-family: "Roboto", sans-serif;
    font-weight: 300;
    background-color: #645e56;
    width: 180px;
    border: none;
    color: #fff;
}
.btn:hover {
    background-color: #433e37;
    border: none;
    color: #fff;
}
.btn-sec {
    font-family: "Roboto", sans-serif;
    font-weight: 300;
    background-color: #fff;
    width: 180px;
    border: none;
    color: #645e56;
    transition: 0.5s;
}
.btn-sec:hover {
    background-color: #fff;
    border: none;
    color: #645e56;
}
</style>
