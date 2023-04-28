<template>
  <div class="q-pa-md">
    <q-card class="my-card">
      <q-card-section class="q-pa-md column items-center">
        <div class="text-h6">Contamos com a sua presença</div>
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
          <div class="q-pa-md column items-center">
            <div>
              <div class="text-subtitle2">
                Você esta convidado para o nosso casamento que se realizará na:
              </div>
              <div class="text-subtitle2">
                <strong> Rua.:</strong> R. das Flores, 107
                <strong>Bairro.:</strong> São Gonçalo dos Campos
                <strong>Estado.:</strong> Bahia <strong>Pais.:</strong> Brasil
              </div>
            </div>
          </div>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d124719.95493251801!2d-38.98227929599896!3d-12.349498661437257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x714378df10f9afb%3A0xb5f00f82796f4aa6!2sFeira%20de%20Santana%20-%20BA!3m2!1d-12.2535651!2d-38.9600273!4m5!1s0x715ca52aadb5131%3A0xe43ba42246956382!2sEstr.%20p%2F%20Fl%C3%B4res%2C%20107%20-%20S%C3%A3o%20Gon%C3%A7alo%20dos%20Campos%2C%20BA%2C%2044330-000!3m2!1d-12.445787699999999!2d-38.947165!5e0!3m2!1spt-BR!2sbr!4v1671647076898!5m2!1spt-BR!2sbr"
            width="100%"
            height="650"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>

          <FotosBahia />
        </q-tab-panel>

        <q-tab-panel name="two">
          <div class="q-pa-md column items-center">
            <div>
              <div class="text-subtitle2">
                Você esta convidado para o nosso casamento que se realizará no:
              </div>
              <div class="text-subtitle2">
                <strong>Sitio Berro D'agua </strong> <br>
                <strong> Rua.:</strong> Estr. Cafundo, 1.450
                <strong>Bairro.:</strong> Cafundo
                <strong>CEP.:</strong> 07500-000
                <strong>Estado.:</strong> São Paulo
                <strong>Pais.:</strong> Brasil
              </div>
            </div>
          </div>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d117182.01241821653!2d-46.38984531970749!3d-23.390464142701205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x94ce64636302db79%3A0xef5ae20eb54ed329!2sJardim%20Nazareth%2C%20S%C3%A3o%20Paulo%20-%20SP!3m2!1d-23.5179677!2d-46.406875199999995!4m5!1s0x94ce855feb8157c5%3A0xf07d64f0be23d65e!2s07500-000%2C%20Santa%20Isabel%20-%20SP!3m2!1d-23.2618673!2d-46.2474381!5e0!3m2!1spt-BR!2sbr!4v1671646862712!5m2!1spt-BR!2sbr"
            width="100%"
            height="650"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>

          <FotosSantaisabel />
        </q-tab-panel>
      </q-tab-panels>
    </q-card>
  </div>
</template>

<script>
import { ref } from "vue";
import FotosBahia from "./FotosBahia.vue";
import FotosSantaisabel from "./FotosSantaisabel.vue";

export default {
  setup() {
    return {
      tab: ref("one"),
    };
  },
  components: { FotosBahia, FotosSantaisabel },
};
</script>

<style lang="sass" scoped>
.my-card
  width: 100%
  max-width: 100%
  max-height: 500px
</style>
