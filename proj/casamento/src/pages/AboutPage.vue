<template>
  <MensagemNossaHistoria/>
</template>

<script>
import { defineComponent } from 'vue'
import MensagemNossaHistoria from 'src/layouts/mensagemNossaHistoria.vue';

export default defineComponent({
    name: "AboutPage",
    components: { MensagemNossaHistoria }
})
</script>
