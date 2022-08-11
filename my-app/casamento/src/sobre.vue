
<template>
  <q-layout view="lHh Lpr lFf"> 
    <q-header elevated class="glossy"  >
      <q-toolbar class="bg-light-green-5">
        <q-btn
          flat
          dense
          round
          @click="leftDrawerOpen = !leftDrawerOpen"
          aria-label="Menu"
          icon="menu"
        />

        <q-toolbar-title>
          Suellen & Alisson
        </q-toolbar-title>
        
      </q-toolbar>
    </q-header>
     <q-drawer
      v-model="leftDrawerOpen"
      show-if-above
      bordered
      class="bg-light-green-2"
    >
      <q-list>
        <q-item-label header>Menu</q-item-label>
        <q-item clickable tag="a" href="./App.vue">
          <q-item-section avatar>
            <q-icon name="home" />
          </q-item-section>
          <q-item-section>
            <q-item-label>Inicio</q-item-label>
            <q-item-label caption>Assuntos Principais</q-item-label>
          </q-item-section>
        </q-item>
        <q-item clickable tag="a" href="./sobre.vue">
          <q-item-section avatar>
            <q-icon name="code" />
          </q-item-section>
          <q-item-section>
            <q-item-label>Sobre</q-item-label>
            <q-item-label caption>Embarque na história dos noivos</q-item-label>
          </q-item-section>
        </q-item>
        <q-item clickable tag="a" target="_blank" href="https://chat.quasar.dev">
          <q-item-section avatar>
            <q-icon name="chat" />
          </q-item-section>
          <q-item-section>
            <q-item-label>Discord Chat Channel</q-item-label>
            <q-item-label caption>chat.quasar.dev</q-item-label>
          </q-item-section>
        </q-item>
        <q-item clickable tag="a" target="_blank" href="https://forum.quasar.dev">
          <q-item-section avatar>
            <q-icon name="forum" />
          </q-item-section>
          <q-item-section>
            <q-item-label>Forum</q-item-label>
            <q-item-label caption>forum.quasar.dev</q-item-label>
          </q-item-section>
        </q-item>
        <q-item clickable tag="a" target="_blank" href="https://twitter.com/quasarframework">
          <q-item-section avatar>
            <q-icon name="rss_feed" />
          </q-item-section>
          <q-item-section>
            <q-item-label>Twitter</q-item-label>
            <q-item-label caption>@quasarframework</q-item-label>
          </q-item-section>
        </q-item>
      </q-list>
    </q-drawer>

    <q-page-container>


        <FooTer/>
    </q-page-container>

    <q-page-scroller position="bottom-right" :scroll-offset="150" :offset="[18, 18]">
        <q-btn fab icon="keyboard_arrow_up" color="accent" />
    </q-page-scroller>

    
  </q-layout>
</template>
<style >
  body{
    background: rgb(250, 241, 230);
  }
</style>
<script>
import { ref } from 'vue'
import FooTer from './components/FooTer.vue'

export default {
  name: 'App',

  components: {
   
    FooTer
  },

  setup () {
    return {
      leftDrawerOpen: ref(false)
    }
  }
}
</script>
