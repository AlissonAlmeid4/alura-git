<template>
  <navBar msg="Welcome to Your Vue.js + TypeScript App"/>
  <IndexMain msg="Welcome to Your Vue.js + TypeScript App"/>

</template>

<script lang="ts">
import { defineComponent } from 'vue';
import IndexMain from '../src/IndexMain.vue';
import navBar from '../src/navBar.vue';


export default defineComponent({
  name: 'App',
  components: {
    IndexMain,
    navBar
    
  }
});
</script>

<style>
#app {

  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
body{
  background: #ff0080;
}
</style>
