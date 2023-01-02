<template>
  <div class="q-pa-md row justify-center">
    <q-btn label="Assistir ao video novamente" color="light-green" @click="dialog = true" />

    <q-dialog v-model="dialog">
      <q-card>
        <q-card-section class="row items-center q-gutter-sm">
              <!-- width="250" height="415 mobile -->
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
      dialog: ref(true)
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
      width: 250px;
      height: 415px;
    }

}
</style>
