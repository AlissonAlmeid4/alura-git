<template>
  <EsperaCoracao/>
  <TransferenciaNubank/>
  <FooTer/>
</template>

<script>
import { defineComponent } from 'vue'
import TransferenciaNubank from '../layouts/TransferenciaNubank.vue'
import FooTer from 'src/layouts/FooTer.vue';
import EsperaCoracao from 'src/layouts/EsperaCoracao.vue';

export default defineComponent({
    name: "TransferPage",
    components: { TransferenciaNubank, FooTer, EsperaCoracao }
})
</script>
