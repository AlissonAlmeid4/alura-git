<template>
  <div class="q-pa-md">
    <div class="mensagem">
      <div class="text-h4">SEJA BEM VINDO AO NOSSO SITE!</div>
    </div>
    <div class="mensagem">
      <div class="text-h6">
        A MELHOR FORMA DE COMPARTILHAR ESSE MOMENTO COM VOCÊS É VIVENDO JUNTOS
        ESSE SONHO!
      </div>
    </div>

    <div class="q-pa-md row justify-center">
      <img src="../photos/casal.png" height="250px" alt="" srcset="" />
    </div>
    <div class="mensagem">
      <div class="text-subtitle1">
        Aqui vamos compartilhar com vocês, queridos amigos e familiares, o
        momentos mais marcantes da nossa história. A contagem regressiva começa,
        o frio na barriga e toda a ansiedade do dia mais esperado de nossas
        vidas nos enche de alegria em tê-los ao nosso lado. Vamos juntos nesse
        grande sonho, o dia em que uniremos nossas almas e corpos para sempre, o
        dia do nosso casamento.
        <br />
        E por você ser importante para nós esta convidado a participar deste
        momento.
      </div>
    </div>
    <div class="nos q-pa-md row justify-center">
      <img src="../photos/BEIJOTESTA.jpg" alt="" />
    </div>
  </div>
</template>

<script>
export default {
  name: "MensagemBemvindo",
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
.nos > img {
  height: 850px;
}

@media screen and (max-width: 480px) {
  .nos > img {
    height: 650px;
  }
  img {
    width: 280px;
  }
}
</style>
