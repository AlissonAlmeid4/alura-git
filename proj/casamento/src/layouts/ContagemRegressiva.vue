<template>
  <PopUp/>
<div class="q-pa-md">
    <q-card class="my-card">
      <q-card-section class="q-pa-md column items-center">
        <div class="text-h5">Contamos com a sua presença</div>
        <div class="text-subtitle2">
          Escolha a localidade mais proxima de você
        </div>
      </q-card-section>

      <q-tabs v-model="tab" class="text-teal">
        <q-tab label="Feira de Santana - BA " name="one" />
        <q-tab label="Santa Isabel - SP" name="two" />
      </q-tabs>

      <q-separator />

      <q-tab-panels v-model="tab" animated>
        <q-tab-panel name="one">
           <div class="q-pa-md row justify-center">
              <iframe id="iframeTelaCheia" width="534" height="275" src="https://w2.countingdownto.com/4476720" frameborder="0"></iframe>
              <iframe id="iframeTelaPequena" width="288" height="148" src="https://w2.countingdownto.com/4477879" frameborder="0"></iframe>
          </div>
        </q-tab-panel>

        <q-tab-panel name="two">
           <div class="q-pa-md row justify-center">
              <iframe id="iframeTelaCheia" width="537" height="276" src="https://w2.countingdownto.com/4476744"  frameborder="0"></iframe>
              <iframe id="iframeTelaPequena" width="288" height="148" src="https://w2.countingdownto.com/4477893" frameborder="0"></iframe>
          </div>
        </q-tab-panel>
      </q-tab-panels>
    </q-card>
  </div>
</template>

<script>
import { ref } from "vue";
import PopUp from "./PopUp.vue";

export default {
    name: 'ContagemRegressiva',

    setup() {
      return {
        tab: ref("one"),
      };
    },
    components: {PopUp},
};
</script>

<style scoped>
    #iframeTelaPequena{
      display: none;
    }
  @media screen and (max-width: 480px)  {
    #iframeTelaCheia{
      display: none;
    }
    #iframeTelaPequena{
      display: flex;
    }

}

</style>


