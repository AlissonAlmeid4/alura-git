

<template>
  <q-layout view="lHh Lpr lFf"  >
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
           <img id="imagemSeta" src="../photos/setaEsquerda_1.gif" >
           <q-toolbar-title id="titulo"> <u> Suellen & Alisson </u> </q-toolbar-title>
      </q-toolbar>
    </q-header>
    <q-drawer
      v-model="leftDrawerOpen"
      show-if-above
      bordered
      class="bg-light-green-2"
    >
      <q-list>
        <q-item-label header> Menu Principal

       <q-btn
       id="botaoInterno"
          flat
          dense
          round
          @click="leftDrawerOpen = !leftDrawerOpen"
          aria-label="Menu"
          icon="chevron_left"
        />
        </q-item-label>
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
    caption: 'Bem-Vindo',
    icon: 'home',
    link: '/AlissonAlmeid4/#'
  },
  {
    title: 'Sobre',
    caption: 'Nossa História',
    icon: 'favorite',
    link: '/AlissonAlmeid4/#/about'
  },
  {
    title: 'Presentes',
    caption: 'Sujestão de Presente',
    icon: 'link',
    link: '/AlissonAlmeid4/#/present'
  },
  {
    title: 'Lista de presença',
    caption: 'Confirme sua presença',
    icon: 'record_voice_over',
    link: '/AlissonAlmeid4/#/gift'
  },
  {
    title: 'O Casamento',
    caption: 'Como chegar',
    icon: 'map',
    link: '/AlissonAlmeid4/#/maps'
  },
  {
    title: 'Contato',
    caption: 'Fale com a Gente',
    icon: 'public',
    link: '/AlissonAlmeid4/#/contact'
  },
  {
    title: 'Apoie-nos',
    caption: 'Transferencia',
    icon: '$',
    link: '/AlissonAlmeid4/#/transfer'
  }
]

export default defineComponent({
  name: 'MainLayout',

  components: {
    EssentialLink
  },

  setup () {
    const leftDrawerOpen = ref(true)

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
<style scoped>
  #titulo{
    text-align: center;
  }
  #imagemSeta{
    height: 4rem;
  }
  #botaoInterno{
    display: none;
  }
    @media screen and (max-width: 480px)  {

    #botaoInterno{
    display: inline-flex;
    margin-left: 7rem;
    border: 1px solid ;
  }
}
</style>
