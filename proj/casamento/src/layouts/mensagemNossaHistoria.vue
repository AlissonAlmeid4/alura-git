<template>
  <div class="desabilitar q-pa-xs row justify-center">
    <div class="mensagem">
      <div class="text-h4">NOSSA HISTÓRIA!</div>
      <div class="text-h6">
        CONHEÇA OS DETALHES DA NOSSA CAMINHADA ATÉ O GRANDE SONHO DO NOSSO
        CASAMENTO.
      </div>
    </div>
    <div class="livro q-pa-md row justify-center">
      <iframe
        width="940px"
        height="683px"
        src="https://www.yumpu.com/xx/embed/view/nM45Oo1lyvz0jhFf"
        frameborder="0"
        allowfullscreen="true"
        allowtransparency="true"
      ></iframe>
    </div>
  </div>
</template>
<style scoped>
.mensagem {
  text-align: center;
  padding: 12px;
  color: rgba(0, 0, 0, 0.7);
}

@media screen and (max-width: 480px) {
  .mensagem {
    padding: 0px;
  }
  .livro,
  .desabilitar {
    padding: 0;
  }
  img {
    width: 330px;
  }
  iframe {
    width: 360px;
    height: 583px;
  }
}
</style>
