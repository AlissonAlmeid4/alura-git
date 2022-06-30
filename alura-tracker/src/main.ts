import { createApp } from 'vue'
import App from './App.vue'
import '@fortawesome/fontawesome-free/css/all.css'
import roteadorRoteador from './roteadorRoteador'
import { key, store } from './store'

createApp(App)
    .use(roteadorRoteador)
    .use(store, key)
    .mount('#app')
