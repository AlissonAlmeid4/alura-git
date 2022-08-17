<template>
  <SujestaoPresentes/>
  <EscolherPresente/>
  <ListaPresentes/>

  <FooTer/>
</template>

<script>
import { defineComponent } from 'vue'
import SujestaoPresentes from '../layouts/SujestaoPresentes';
import ListaPresentes from '../layouts/ListaPresentes';
import EscolherPresente from 'src/layouts/escolherPresente.vue';
import FooTer from 'src/layouts/FooTer.vue';

export default defineComponent({
    name: "PresentPage",
    components: { SujestaoPresentes, ListaPresentes, EscolherPresente, FooTer }
})
</script>
