

<script>
import { useQuasar, QSpinnerHearts } from "quasar";

export default {
  name: "EsperaCoracao",
  setup() {
    const $q = useQuasar();

    $q.loading.show({
      spinner: QSpinnerHearts,
      spinnerColor: "red",
      spinnerSize: 240,
      // backgroundColor: "purple",
      message: "Aguarde um pouquito...",
      messageColor: "white",
    });

    setTimeout(() => {
      $q.loading.hide();
    }, 1000);
  },
};
</script>
