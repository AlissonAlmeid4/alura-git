<template>
  <EsperaCoracao/>
  <MensagemNossaHistoria/>

  <FooTer/>
</template>

<script>
import { defineComponent } from 'vue'
import MensagemNossaHistoria from 'src/layouts/mensagemNossaHistoria';
import FooTer from 'src/layouts/FooTer.vue';
import EsperaCoracao from 'src/layouts/EsperaCoracao.vue';

export default defineComponent({
    name: "AboutPage",
    components: { MensagemNossaHistoria, FooTer, EsperaCoracao }
})
</script>
