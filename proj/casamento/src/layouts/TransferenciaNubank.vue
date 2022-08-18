<template>
<div class="q-pa-md">
    <div class="mensagem ">
        <div class="text-h4">"Faça parte desse Sonho"</div>
    </div>
    <div class="q-pa-md row justify-center">
        <img src="../photos/PIX_QRCODE.jpg"  width="200px" height="200px" alt="" srcset="">
    </div>
    <div class="mensagem">
        <div class="text-h6">Escaneie o código acima com o seu app do banco ou</div>
    </div>


    <div class="column items-center">
        <div class="text-subtitle1">
          <q-item clickable v-ripple class="column items-center">
            <q-btn color="white" style="width: 250px" text-color="black" target="_blank" label="Clique Aqui" href="https://nubank.com.br/pagar/4ceqf/1b0aXQCZfw" />
          </q-item>
          <div class="mensagem">
        <div class="text-h6">para fazer a transferência.</div>
      <div class="q-pa-md row justify-center">
        <img src="../photos/patinhas.gif"  >
    </div>
    </div>
  </div>
</div>

</div>
</template>

<script>
export default {
    name: 'TransferenciaNubank',
}
</script>

<style>
  .mensagem{
  text-align: center;
  padding: 12px;
  color: rgba(0, 0, 0, .7);

  }

  .icon{
    display: flex;
    justify-content: center;
    align-items: center;
  }
</style>
