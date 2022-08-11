<template>
  <div class="q-pa-md">
    <q-carousel
      arrows
      animated
      v-model="slide"
      height="750px"
    >
      <q-carousel-slide name="first" img-src="../photos/paisagem.jpeg">
        <div class="absolute-bottom custom-caption">
          <div class="text-h3">Suellen & Alisson</div>
          <div class="text-subtitle1">"... e quando a amizade não teve mais para onde crescer, ela virou amor!"</div>
        </div>
      </q-carousel-slide>

    </q-carousel>
  </div>
</template>

<script>
import { ref } from 'vue'

export default {
  setup () {
    return {
      slide: ref('first')
    }
  }
}
</script>

<style lang="sass" scoped>
.custom-caption
  text-align: center
  padding: 12px
  color: white
  background-color: rgba(0, 0, 0, .3)
</style>
