<template>
    <MensagemAdress/>
    <MapaEndereco/>
</template>

<script>
import { defineComponent } from 'vue'
import MapaEndereco from 'src/layouts/MapaEndereco.vue';
import MensagemAdress from 'src/layouts/MensagemAdress.vue';

export default defineComponent({
    name: "IndexPage",
    components: { MapaEndereco, MensagemAdress }
})
</script>
