<template>
<div class="q-pa-md">

        <div class="mensagem">
        <div class="text-subtitle1 " >
<pre>
Já sabe qual presente vai dar ? <q-btn label="Clique aqui" color="primary" @click="bar = true" /> e nos avise.
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
        width="440" height="677" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe>
        </q-card-section>
      </q-card>
    </q-dialog>
</pre>
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

<style>
  .mensagem{
  text-align: center;
  padding: 12px;
  color: rgba(0, 0, 0, .7);

  }

</style>
