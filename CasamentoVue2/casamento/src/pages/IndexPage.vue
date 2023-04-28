<template>
  <EsperaCoracao/>
  <CarroselSlide />
  <ContagemRegressiva />
  <MensagemBemvindo />
  <GallerySlide />
  <FooTer />
</template>

<script>
import { defineComponent } from "vue";
import CarroselSlide from "src/layouts/CarroselSlide.vue";
import ContagemRegressiva from "src/layouts/ContagemRegressiva.vue";
import MensagemBemvindo from "../layouts/MensagemBemvindo.vue";
import GallerySlide from "../layouts/GallerySlide.vue";
import FooTer from "../layouts/FooTer.vue";
//import { useQuasar, QSpinnerHearts } from "quasar";
import EsperaCoracao from "../layouts/EsperaCoracao.vue";

export default defineComponent({
  name: "IndexPage",
  components: {
    CarroselSlide,
    ContagemRegressiva,
    MensagemBemvindo,
    GallerySlide,
    FooTer,
    EsperaCoracao
},
  // setup() {
  //   const $q = useQuasar();

  //   $q.loading.show({
  //     spinner: QSpinnerHearts,
  //     spinnerColor: "red",
  //     spinnerSize: 240,
  //     // backgroundColor: "purple",
  //     message: "Aguarde um pouquito...",
  //     messageColor: "white",
  //   });

  //   setTimeout(() => {
  //     $q.loading.hide();
  //   }, 1000);
  // },
});
</script>
