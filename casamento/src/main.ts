import { createApp } from 'vue'
import index from '../src/pages/index.vue'
import store from './store'

createApp(index).use(store).mount('#app')
