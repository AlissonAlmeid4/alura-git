<template>
  <div class="">
    <div class="q-pa-md">
      <div class="mensagem">
        <div class="mensagem text-h4">FOTOS RECENTES</div>
      </div>
    </div>

    <div class="fotos q-gutter-md row justify-center ">
      <div class="col-4">
        <img src="../photos/entradaSitio.jpg" alt="" />
      </div>

      <div class="col-4">
        <img src="../photos/salao.jpg" no-native-menu />
      </div>

      <div class="col-4">
        <img src="../photos/lago.jpg"/>
      </div>

      <div class="col-4">
        <img src="../photos/rampa.jpg" />
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
  height: 350px;
  width: 505px;
}
@media screen and (max-width: 480px) {
  img {
    width: 300px;
    height: 200px;

  }
  .fotos{
    justify-content: left;
    display: inline;
  }

}
</style>
