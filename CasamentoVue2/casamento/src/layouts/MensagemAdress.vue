<template>
  <div class="q-pa-md">
    <div class="mensagem">
      <div class="text-h4">O CASAMENTO</div>
    </div>
    <div class="mensagem">
      <div class="text-h6">SUA PRESENÇA É IMPORTANTE PARA NÓS</div>
      <div class="text-h7">VENHA FAZER PARTE DE NOSSA FESTA</div>
    </div>

    <div class="q-pa-md row justify-center">
      <img
        src="../photos/grupo.png"
        width="300px"
        height="150px "
        alt=""
        srcset=""
      />
    </div>
    <div class="mensagem">
      <div class="text-subtitle1">
        Os desafios até aqui foram enormes, mas em tudo Deus nos tem abençoado,
        nos protegido e alegrado. Nunca estivemos sozinhos. Deus sempre esteve
        conosco. <br />
        E quando não achamos forças para ficar longe um do outro, a data foi
        marcada, Contamos com você em nosssa festa de casamento
        <div class="text-h7">
          <br>
          NA BAHIA: SERÁ REALIZADA NO DIA 12 DO MÊS DE FEVEREIRO DO ANO DE 2023
          <br>
         EM SÃO PAULO: SERÁ REALIZADA NO DIA 19 DO MÊS DE FEVEREIRO DO ANO DE 2023
        </div>
      </div>
    </div>
    <div class="q-pa-md row justify-center">
      <img src="../photos/POSEGRAMA.jpg" width="400px" height="500px" alt="" />
    </div>
  </div>
</template>

<script>
export default {
  name: "MensagemAdress",
};
</script>

<style scoped>
.mensagem {
  text-align: center;
  padding: 12px;
  color: rgba(0, 0, 0, 0.7);
}

.icon {
  display: flex;
  justify-content: center;
  align-items: center;
}
@media screen and (max-width: 480px) {
  img {
    width: 320px;
  }
}
</style>
