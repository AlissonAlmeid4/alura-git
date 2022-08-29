<template>
  <div class="q-pa-md">
    <div class="q-pa-md">
      <div class="mensagem">
        <div class="mensagem text-h4">FOTOS RECENTES</div>
      </div>
    </div>

    <div class="q-gutter-md row justify-center">
      <div class="col-4">
        <q-img src="../photos/entradaSitio.jpg" no-native-menu> </q-img>
      </div>

      <div class="col-4">
        <q-img src="../photos/salao.jpg" no-native-menu> </q-img>
      </div>

      <div class="col-4">
        <q-img src="../photos/lago.png" no-native-menu> </q-img>
      </div>

      <div class="col-4">
        <q-img src="../photos/rampa.png" no-native-menu> </q-img>
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
img {
  height: 400px;
  width: 150px;
}

</style>
