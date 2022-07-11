import {createRouter, createWebHashHistory, RouteRecordRaw } from "vue-router";
import Tarefas from '../views/Tarefas.vue'
import ProjetosMain from '../views/ProjetosMain.vue'
import Formulario from '../views/Projetos/FormularioProjeto.vue'
import ListaE from '../views/Projetos/ListaE.vue'

const rotas: RouteRecordRaw[] = [
{
    path: '/',
    name: 'Tarefas',
    component: Tarefas
},
{
    path: '/ProjetosMain',
    component: ProjetosMain,
    children: [
            {
                path: '',
                name: 'ProjetosMain',
                component: ListaE
            },
            {
                path: 'novo',
                name: 'Novo projeto',
                component: Formulario
            },
            {
                path: ':id',
                name: 'Editar projeto',
                component: Formulario,
                props: true
            },
        ]
    }
]

const roteador = createRouter({
    history: createWebHashHistory(),
    routes: rotas
})

export default roteador;