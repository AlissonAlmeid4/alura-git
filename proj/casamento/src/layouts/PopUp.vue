<template>
  <div class="q-pa-md row justify-center">
    <q-btn label="Assistir ao video novamente" color="light-green" @click="dialog = true" />

    <q-dialog v-model="dialog">
      <q-card>
        <q-card-section class="row items-center q-gutter-sm">
              <!-- <iframe width="1000" height="400" src="https://www.youtube.com/watch?v=4fezP875xOQ"  frameborder="0"></iframe> -->
<iframe width="560" height="315" src="https://www.youtube.com/embed/4fezP875xOQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
      dialog: ref(false)
    }
  }
}
</script>
