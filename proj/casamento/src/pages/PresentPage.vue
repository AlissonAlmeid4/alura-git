<template>
  <SujestaoPresentes/>
  <EscolherPresente/>
  <ListaPresentes/>
</template>

<script>
import { defineComponent } from 'vue'
import SujestaoPresentes from '../layouts/SujestaoPresentes';
import ListaPresentes from '../layouts/ListaPresentes';
import EscolherPresente from 'src/layouts/escolherPresente.vue';

export default defineComponent({
    name: "PresentPage",
    components: { SujestaoPresentes, ListaPresentes, EscolherPresente }
})
</script>
