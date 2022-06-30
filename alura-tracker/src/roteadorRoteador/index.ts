import {createRouter, createWebHashHistory, RouteRecordRaw } from "vue-router";
import Tarefas from '../views/Tarefas.vue'
import ProjetosMain from '../views/ProjetosMain.vue'
import Formulario from '../views/Projetos/FormularioProjeto.vue'
const rotas: RouteRecordRaw[] = [{
    path: '/',
    name: 'Tarefas',
    component: Tarefas
},
{
    path: '/ProjetosMain',
    name: 'ProjetosMain',
    component: ProjetosMain
},
{
    path: '/ProjetosMain/novo',
    name: 'Novo ProjetosMain',
    component: Formulario
},
{
    path: '/ProjetosMain/:id',
    name: 'Editar ProjetosMain',
    component: Formulario,
    props: true
},
]

const roteador = createRouter({
    history: createWebHashHistory(),
    routes: rotas
})

export default roteador;