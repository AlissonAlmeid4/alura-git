<template>
      <FormularioPreencher @aoSalvarTarefa="salvarTarefa"/>
      <BoxDados v-if="listaEstaVazia">
        Você não está muito produtivo hoje <span class="has-text-weight-bold">:(</span>
      </BoxDados>
      <Tarefa v-for="(tarefa, index) in tarefas" :key="index" :tarefa="tarefa"/>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import FormularioPreencher from '../components/Formulario.vue'
import Tarefa from '../components/Tarefa.vue'
import BoxDados from '../components/BoxDados.vue'
import ITarefas from '../interfaces/ITarefa'

export default defineComponent({
  name: 'App',
  components: {
    FormularioPreencher,
    Tarefa,
    BoxDados
  },
  data () {
    return {
      tarefas: [] as ITarefas[],
    }
  },
  computed: {
    listaEstaVazia() :boolean {
      return this.tarefas.length === 0;
    }
  },
  methods: {
    salvarTarefa (tarefa: ITarefas){
      this.tarefas.push(tarefa)
    },
  }
});

</script>