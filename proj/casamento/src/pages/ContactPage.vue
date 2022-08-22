<template>
  <TextoContato/>

</template>

<script>
import { defineComponent } from 'vue'

import TextoContato from 'src/layouts/TextoContato.vue';

export default defineComponent({
    name: "ContactPage",
    components: { TextoContato }
})
</script>
