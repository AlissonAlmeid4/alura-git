<template>
  <EsperaCoracao/>
  <TextoContato/>

</template>

<script>
import { defineComponent } from 'vue'

import TextoContato from 'src/layouts/TextoContato.vue';
import EsperaCoracao from 'src/layouts/EsperaCoracao.vue';

export default defineComponent({
    name: "ContactPage",
    components: { TextoContato, EsperaCoracao }
})
</script>
