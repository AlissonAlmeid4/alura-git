<template>
<div class="q-pa-md row justify-center">
  <div class="crono ">
            <div class="text-h2" >Contagem Regressiva</div>
            <div class="text-subtitle1">Conte o tempo com a gente</div>
            <iframe id="oak-embed" width="480" height="80" 
            style="display: block; margin: 0px auto; border: 0px;" 
            src="https://embed-countdown.onlinealarmkur.com/pt/#2023-01-01T00:00:00@America%2FSao_Paulo"></iframe>
    </div>
</div>

</template>

<script>
export default {
    name: 'ContagemRegressiva',
}
</script>

<style>
  .crono{
  text-align: center;
  padding: 12px;
  color: rgba(0, 0, 0, .7);
  background-color: rgba(0, 0, 0, 0.3)
  }


</style>