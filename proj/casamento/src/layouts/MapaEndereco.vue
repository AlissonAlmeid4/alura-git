<template>
  <div class="q-pa-md">
    <q-card class="my-card ">
      <q-card-section class="q-pa-md column items-center">
        <div class="text-h6 ">Contamos com a sua presença</div>
        <div class="text-subtitle2">Escolha a localidade mais proxima de você</div>
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
            <div class="text-subtitle2">Você esta convidado para o nosso casamento que se realizará na:</div>
            <div class="text-subtitle2"><strong> Rua.:</strong> R. das Flores, 107 <strong>Bairro.:</strong> São Gonçalo dos Campos <strong>Estado.:</strong> Bahia <strong>Pais.:</strong> Brasil</div>
          </div>
        </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d7778380.094000022!2d-47.850987212669935!3d-17.836893084205936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-23.462016199999997!2d-46.4681595!4m5!1s0x715ca52aadb5131%3A0xe43ba42246956382!2sEstr.%20p%2F%20Fl%C3%B4res%2C%20107%20-%20S%C3%A3o%20Gon%C3%A7alo%20dos%20Campos%2C%20BA%2C%2044330-000!3m2!1d-12.445787699999999!2d-38.947165!5e0!3m2!1spt-BR!2sbr!4v1660820791736!5m2!1spt-BR!2sbr"
          width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          <FotosBahia/>
        </q-tab-panel>

        <q-tab-panel name="two">
        <div class="q-pa-md column items-center">
          <div>
              <div class="text-subtitle2">Você esta convidado para o nosso casamento que se realizará na:</div>
              <div class="text-subtitle2"><strong> Rua.:</strong> R. das Flores, 107 <strong>Bairro.:</strong> Santa Isabel <strong>Estado.:</strong> São Paulo <strong>Pais.:</strong> Brasil</div>
          </div>
        </div>
       <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d117175.94636338859!2d-46.405002019573644!3d-23.397320297350294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-23.462016199999997!2d-46.4681595!4m5!1s0x94ce81efe01073b5%3A0x5403da6106fb371b!2sSanta%20Isabel%2C%20SP!3m2!1d-23.316603399999998!2d-46.2261354!5e0!3m2!1spt-BR!2sbr!4v1660820417171!5m2!1spt-BR!2sbr"
       width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <FotosSantaisabel/>
        </q-tab-panel>
      </q-tab-panels>
    </q-card>
  </div>
</template>

<script>
import { ref } from 'vue'
import FotosBahia from './FotosBahia.vue';
import FotosSantaisabel from './FotosSantaisabel.vue';

export default {
    setup() {
        return {
            tab: ref("one")
        };
    },
    components: { FotosBahia, FotosSantaisabel }
}
</script>

<style lang="sass" scoped>
.my-card
  width: 100%
  max-width: 100%
  max-height: 500px
</style>
