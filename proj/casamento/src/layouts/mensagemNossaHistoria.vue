<template>
  <div class="q-pa-md row justify-center">
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
        height="783px"
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
  position: absolute;
}
iframe {
  margin-top: 20px;
}
@media screen and (max-width: 480px) {
  .mensagem {
    padding: 0px;
  }
  img {
    width: 330px;
  }
  iframe {
    margin-top: 60px;
  }
}
</style>
