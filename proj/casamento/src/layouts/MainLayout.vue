<template>
  <q-layout view="lHh Lpr lFf">
    <q-header elevated class="glossy">
      <q-toolbar class="bg-light-green-5">
        <q-btn
          flat
          dense
          round
          @click="leftDrawerOpen = !leftDrawerOpen"
          aria-label="Menu"
          icon="menu"
        />

        <q-toolbar-title> Suellen & Alisson </q-toolbar-title>
      </q-toolbar>
    </q-header>
    <q-drawer
      v-model="leftDrawerOpen"
      show-if-above
      bordered
      class="bg-light-green-2"
    >
      <q-list>
        <q-item-label header> Menu Principal </q-item-label>

        <EssentialLink
          v-for="link in essentialLinks"
          :key="link.title"
          v-bind="link"
        />
      </q-list>
    </q-drawer>

    <q-page-container>
	 <router-view />
    </q-page-container>

    <q-page-scroller
      position="bottom-right"
      :scroll-offset="150"
      :offset="[18, 18]"

    >
      <q-btn fab icon="keyboard_arrow_up " color="green" />
    </q-page-scroller>
  </q-layout>

</template>

<script>
import { defineComponent, ref } from 'vue'
import EssentialLink from 'components/EssentialLink.vue'

const linksList = [
  {
    title: 'Inicio',
    caption: 'Assuntos Principais',
    icon: 'home',
    link: '/'
  },
  {
    title: 'Sobre',
    caption: 'Nossa História',
    icon: 'favorite',
    link: '/#/about'
  },
  {
    title: 'Presentes',
    caption: 'Sujestão de Presente',
    icon: 'phone',
    link: '/#/present'
  },
  {
    title: 'Lista de presença',
    caption: 'Confirme sua presença',
    icon: 'record_voice_over',
    link: '/#/gift'
  },
  {
    title: 'O Casamento',
    caption: 'Como chegar',
    icon: 'public',
    link: '/#/maps'
  },
  {
    title: 'Facebook',
    caption: '@QuasarFramework',
    icon: 'public',
    link: ''
  },
  {
    title: 'Apoie-nos',
    caption: 'Transferencia',
    icon: 'money',
    link: '/#/transfer'
  }
]

export default defineComponent({
  name: 'MainLayout',

  components: {
    EssentialLink
  },

  setup () {
    const leftDrawerOpen = ref(false)

    return {
      essentialLinks: linksList,
      leftDrawerOpen,
      toggleLeftDrawer () {
        leftDrawerOpen.value = !leftDrawerOpen.value
      }
    }
  }
})
</script>
