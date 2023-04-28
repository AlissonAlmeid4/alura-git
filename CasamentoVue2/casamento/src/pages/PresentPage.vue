<template>
  <EsperaCoracao/>
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
import EsperaCoracao from 'src/layouts/EsperaCoracao.vue';

export default defineComponent({
    name: "PresentPage",
    components: { SujestaoPresentes, ListaPresentes, EscolherPresente, FooTer, EsperaCoracao }
})
</script>
