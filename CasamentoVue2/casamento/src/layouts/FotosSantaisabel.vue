<template>
  <div class="">
    <div class="q-pa-md">
      <div class="mensagem">
        <div class="mensagem text-h4">FOTOS RECENTES</div>
      </div>
    </div>

    <div class="fotos q-gutter-md row justify-center">
      <div class="col-4">
        <q-img src="../photos/entradaSitio.jpg" no-native-menu />
      </div>

      <div class="col-4">
        <q-img src="../photos/salao.jpg" no-native-menu />
      </div>

      <div class="col-4">
        <q-img src="../photos/lago.jpg" no-native-menu />
      </div>

      <div class="col-4">
        <q-img src="../photos/rampa.jpg" no-native-menu />
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
.mensagem {
  text-align: center;
}

@media screen and (max-width: 480px) {
  .q-img {
    width: 300px;
    height: 200px;
  }
  .col-4:last-child {
    margin-bottom: 100px;
  }
  .fotos {
    justify-content: left;
    display: inline;
  }
}
</style>
