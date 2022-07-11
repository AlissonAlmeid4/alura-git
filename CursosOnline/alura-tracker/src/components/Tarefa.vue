<template>
    <Box>
        <div class="columns">
            <div class="column is-4">
                {{tarefa.descricao  || 'Tarefa sem descrição'}}
            </div>
            <div class="column is-3">
                {{ tarefa.projetos?.nome || 'N/A' }}
            </div>
            <div class="column">
                <cronometro :tempoEmSegundos="tarefa.duracaoEmSegundos"/>
            </div>
        </div>
    </Box>
</template>
<script lang="ts">

import {defineComponent, PropType} from 'vue'
import Cronometro from './Cronometro.vue';
import ITarefa from '../interfaces/ITarefa';
import Box from './BoxDados.vue';

export default defineComponent({
    name: 'TarefaListar',
    components: {
        Cronometro,
        Box
    },
    props: {
        tarefa: {
            type: Object as PropType<ITarefa>,
            required: true
        }
    }
}); 

</script>

