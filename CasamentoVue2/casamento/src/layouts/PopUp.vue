<template>
  <div class="q-pa-md row justify-center">
    <q-btn label="Assistir ao video novamente" color="light-green" @click="icon = true" />
    <q-dialog v-model="icon">
      <q-card >
        <q-card-section class="row items-center q-gutter-sm">
            <q-space />
            <q-btn icon="close" flat round dense v-close-popup></q-btn>
            <iframe  src="https://www.youtube.com/embed/GcnPOo6ucew"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
</q-card-section>
      </q-card>
    </q-dialog>
  </div>
</template>
<script>
import { ref } from 'vue'

export default {
  name: 'PopUp',
  setup () {
    return {
      icon: ref(true)

    }
  }
}
</script>
<style scoped>
    iframe{
      width:560px;
      height:515px;
    }
  @media screen and (max-width: 480px)  {

    iframe{
      max-width: 277px;
      max-height: 425px;
    }
}
</style>
