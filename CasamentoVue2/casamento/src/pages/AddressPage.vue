<template>
  <EsperaCoracao/>
    <MensagemAdress/>
    <MapaEndereco/>
</template>

<script>
import { defineComponent } from 'vue'
import MapaEndereco from 'src/layouts/MapaEndereco.vue';
import MensagemAdress from 'src/layouts/MensagemAdress.vue';
import EsperaCoracao from 'src/layouts/EsperaCoracao.vue';

export default defineComponent({
    name: "IndexPage",
    components: { MapaEndereco, MensagemAdress, EsperaCoracao }
})
</script>
