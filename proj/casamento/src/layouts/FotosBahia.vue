<template>
  <div class="q-pa-md">
    <div class="q-pa-md">
      <div class="mensagem">
        <div class="mensagem text-h4">FOTOS RECENTES</div>
      </div>
    </div>

    <div class="fotos q-gutter-md row justify-center">
      <div class="col-4">
        <img
          src="../photos/DEITADOSGRAMA.jpg"
          no-native-menu
          max-height="600px"
        />
      </div>

      <div class="col-4">
        <img src="../photos/CHAPEUSALA.jpg" no-native-menu max-height="600px"/>
      </div>

      <div class="col-4">
        <img src="../photos/POSEGRAMA.jpg" no-native-menu max-height="600px"/>
      </div>

      <div class="col-4">
        <img src="../photos/NATURAL.jpg" no-native-menu max-height="600px"/>
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
    width: 250px;
    height: 300px;
  }
  .fotos {
    justify-content: left;
    display: inline;
  }
}
</style>
