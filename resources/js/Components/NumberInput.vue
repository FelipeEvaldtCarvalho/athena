<template>
    <div class="d-flex">
        <button @click="minus" class="minus-btn">-</button>
        <input
            type="number"
            :min="min"
            :value="value"
            @input="updateValue($event.target.valueAsNumber)"
        />
        <button @click="plus" class="plus-btn">+</button>
    </div>
</template>
<script>
export default {
    name: "NumberInput",
    data() {
        return {
            input: 1,
        };
    },
    props: {
        min: Number,
        value: Number,
        modelValue: {
            type: Number,
        },
    },
    emits: ["update:modelValue", "increment", "decrement", "zero"],
    methods: {
        plus() {
            this.$emit("increment");
        },
        minus() {
            if (this.value === this.min) {
                return;
            }
            if (this.value === 1) {
                let alert = confirm("Deletar item?");
                if (alert) {
                    this.$emit("decrement");
                    return this.$emit("zero");
                }
                return;
            }
            this.$emit("decrement");
        },
        updateValue(value) {
            this.$emit("update:modelValue", value);
        },
    },
    mounted() {},
};
</script>
<style scoped>
.number-input {
    width: 50px;
}
.plus-btn {
    border-top-right-radius: 0.375rem;
    border-bottom-right-radius: 0.375rem;
}
.minus-btn {
    border-top-left-radius: 0.375rem;
    border-bottom-left-radius: 0.375rem;
}

button {
    border: 1px solid #645e56;
    background-color: #645e56;
    padding: 0 5px;
    color: #fff;
}
button:hover {
    background-color: #433e37;
}
input {
    border: 1px solid #ced4da;
    padding: 0 5px;
    width: 30px;
}
input:focus {
    outline: none;
}
</style>
