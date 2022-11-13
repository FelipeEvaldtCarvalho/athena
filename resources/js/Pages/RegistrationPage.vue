<template>
    <NavbarComponent />
    <RegistrationComponent />
    <FooterComponent />
</template>
<script>
import NavbarComponent from "../Components/NavbarComponent.vue";
import FooterComponent from "../Components/FooterComponent.vue";
import RegistrationComponent from "../Components/RegistrationComponent.vue";
export default {
    name: "LoginPage",
    components: {
        NavbarComponent,
        FooterComponent,
        RegistrationComponent,
    },
};
</script>
