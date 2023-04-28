<template>
  <div class="">
    <div class="q-pa-md">
      <div class="mensagem">
        <div class="text-h4">FOTOS RECENTES</div>
      </div>
    </div>

    <div class="fotos q-gutter-md row justify-center">
      <div class="col-4">
        <q-img src="../photos/CasaSuh1.png" no-native-menu> </q-img>
      </div>

      <div class="col-4">
        <q-img src="../photos/CasaSuh4.png" no-native-menu> </q-img>
      </div>

      <div class="col-4">
        <q-img src="../photos/CasaSuh3.png" no-native-menu> </q-img>
      </div>

      <div class="col-4">
        <q-img src="../photos/CasaSuh2.png" no-native-menu> </q-img>
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
    height: 400px;
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
