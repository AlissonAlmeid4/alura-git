
<template>
  <SadnavBar/>
</template>
<style >
  body{
    background: rgb(250, 241, 230);
  }
</style>
<script>
import { ref } from 'vue'
import SadnavBar from './components/SadnavBar.vue'

export default {
  name: 'App',

  components: {
    SadnavBar
  },

  setup () {
    return {
      leftDrawerOpen: ref(false)
    }
  }
}
</script>
