<template>
<MensagemAdress/>
    <MapaEndereco/>
    <FooTer/>
</template>

<script>
import { defineComponent } from 'vue'
import MapaEndereco from 'src/layouts/MapaEndereco.vue';
import MensagemAdress from 'src/layouts/MensagemAdress.vue';
import FooTer from 'src/layouts/FooTer.vue'

export default defineComponent({
    name: "IndexPage",
    components: { MapaEndereco, MensagemAdress, FooTer }
})
</script>
