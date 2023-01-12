<template>

<div class="q-pa-md ">

<div class="mensagem column items-center ">
<div class="text-subtitle1" >
    <div class="text-h5"> Já sabe qual presente dar ?</div>
    <q-btn label="Clique aqui" color="green"  @click="bar = true" /> e nos avise. <br>
    Providenciaremos um lugar para cada presente...

   <q-dialog v-model="bar" >
      <q-card>
        <q-bar>
           <div> Preencha o formulario</div>
          <q-btn dense flat icon="close" v-close-popup>
            <q-tooltip>Close</q-tooltip>
          </q-btn>
        </q-bar>
        <q-card-section>
          <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSecabSP1VSOFOv7IHTgkPIvT219LPMXPJ38AsoaT1Sr5JhgOw/viewform?embedded=true"
          width="440" height="400 auto" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe>
        </q-card-section>
      </q-card>
    </q-dialog>

          </div>
    </div>
</div>
</template>

<script>

import { ref } from 'vue'

export default {
  name: 'EscolherPresente',
  setup () {
    return {
      icon: ref(false),
      bar: ref(false),
      bar2: ref(false),
      toolbar: ref(false)
    }
  }
}
</script>

<style scoped>
  .mensagem{
  text-align: center;
  padding: 12px;
  color: rgba(0, 0, 0, .7);
  background: #9ccc65;
  }
  @media screen and (max-width: 480px)  {
    iframe{
      width: auto;
    }
}
</style>
