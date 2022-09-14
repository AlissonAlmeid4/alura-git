<template>
  <div class="q-pa-md">
    <q-btn @click="showLoading" label="Show Loading" />
  </div>
</template>

<script>
import { useQuasar, QSpinnerHearts } from "quasar";
import { onBeforeUnmount } from "vue";

export default {
  setup() {
    const $q = useQuasar();
    let timer;

    onBeforeUnmount(() => {
      if (timer !== void 0) {
        clearTimeout(timer);
        $q.loading.hide();
      }
    });

    return {
      showLoading() {
        $q.loading.show({
          spinner: QSpinnerHearts,
          spinnerColor: "red",
          spinnerSize: 240,
          // backgroundColor: "purple",
          message: "Aguarde um momento",
          messageColor: "black",
        });

        // hiding in 3s
        timer = setTimeout(() => {
          $q.loading.hide();
          timer = void 0;
        }, 2000);
      },
    };
  },
};
</script>
