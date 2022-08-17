<template>
  <MensagemNossaHistoria/>

  <FooTer/>
</template>

<script>
import { defineComponent } from 'vue'
import MensagemNossaHistoria from 'src/layouts/mensagemNossaHistoria.vue';
import FooTer from 'src/layouts/FooTer.vue';

export default defineComponent({
    name: "AboutPage",
    components: { MensagemNossaHistoria, FooTer }
})
</script>
