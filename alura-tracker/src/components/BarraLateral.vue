<template>
    <header>
        <h1>
            <img src="../assets/logo.png">
        </h1>
        <div class="has-text-centered">
            <button class="buttun" @click="alterarTema">
             {{textoBotao}}
            </button>
        </div>
        <nav class="panel mt-5">
            <ul>
                <li>
                    <router-link to="/" class="link">
                        <i class="fas fa-tasks"></i>
                        tarefas
                    </router-link>
                </li>
                <li>
                    <router-link to="/projetosMain" class="link">
                        <i class="fas fa-project-diagram"></i>
                        projetos
                    </router-link>
                </li>
            </ul>
        </nav>
    </header>
</template>
<script lang="ts">
import {defineComponent} from 'vue'
export default defineComponent({
    name:'BarraLateral',
    emits: ['aoTemaAlterado'],
    data () {
        return {
            modoEscuroAtivo: false
        }
    },
    computed: {
        textoBotao () {
            if (this.modoEscuroAtivo){
                return 'Desativar modo escuro'
            }
            return 'Ativar modo escuro'
        }
    },
    methods:  {
        alterarTema () {
            this.modoEscuroAtivo = !this.modoEscuroAtivo
            this.$emit('aoTemaAlterado', this.modoEscuroAtivo)
        }
    }
})
</script>
<style scoped>
    h1{
        text-align: center;
    }
    strong{
        color: #f95738;
    }
    header{
        
        background: #0f3b66;
        width: 100%;
        height: 100vh;
        padding: 2rem;
    }
    @media only screen and (max-width:768px) {
    header{
        padding: 2.5rem;
        height: auto;
    }
    }

.buttun{
    padding: 15px;
    background:#faf0ca;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
.panel li {
    margin: 8px 0;
}
.link{
    color: #fff;
}
.link:hover{
    color: #faf0ca;
}
.link.router-link-active{
    color: #faf0ca;
}
</style>