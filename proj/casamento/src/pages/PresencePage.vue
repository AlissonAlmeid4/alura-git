<template>
  <EsperaCoracao />
  <div class="q-pa-md column items-center">
    <ListaPresenca></ListaPresenca>
  </div>
</template>

<script>
import { defineComponent } from "vue";
import ListaPresenca from "src/layouts/ListaPresenca.vue";
import EsperaCoracao from "../layouts/EsperaCoracao.vue";

export default defineComponent({
  name: "PresencePage",
  components: { ListaPresenca, EsperaCoracao },
});
</script>
