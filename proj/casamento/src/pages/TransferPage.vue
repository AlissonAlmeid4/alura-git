<template>
  <TransferenciaNubank/>
  <FooTer/>
</template>

<script>
import { defineComponent } from 'vue'
import TransferenciaNubank from '../layouts/TransferenciaNubank.vue'
import FooTer from 'src/layouts/FooTer.vue';

export default defineComponent({
    name: "TransferPage",
    components: { TransferenciaNubank, FooTer }
})
</script>
