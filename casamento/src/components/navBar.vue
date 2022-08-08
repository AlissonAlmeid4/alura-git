<template>
  <div class="main">
    <div class="navbar">
    <ul>
        <li><a href="../pages/index.vue">INICIO</a></li>
        <li><a href="">SOBRE OS NOIVOS</a></li>
        <li><a href="">CASAMENTO</a>
            <ul>
                <li><a href="">Nossa História</a></li>
                <li><a href="">Mensagem aos noivos</a></li>
                <li><a href="">Galeria</a></li>
           </ul>
        </li>
        <li><a href="">PRESENTES</a>
            <ul>
                <li><a href="sugestao.html">Sujestão de Presentes</a></li>
                <li><a href="transferencia.html">Transferência</a></li>
            </ul>
        </li>
        <li><a href="contato.html">CONTATO</a></li>
      </ul>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';

export default defineComponent({
  name: 'navBar',

});
</script>
a
<style type="scss">
    .main{
        position: absolute;
        top: 0; 
        left: 0;
        width: 100%;
    }
    .navbar{
        width: 100%;
        height: 30px;
        background-color: rgba(0,0,0,0.9);
        padding: 05px 0px 05px 0px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .navbar a{
        text-decoration: none;
        list-style: none;
        color: rgb(255, 255, 255);
        
    }
    .navbar > ul > li{
        text-decoration: none;
        list-style: none;
        display:inline-block;
        padding: 10px 20px 10px 20px;
    }
     .navbar > ul > li:hover{
        background: #333;
        color: #fff;
        text-shadow: 0px 0px 5px #fff;
    }
    .navbar > ul > li > ul{
        display: none;
    }

    .navbar >ul > li:hover ul,
    .navbar >ul > li.over ul {
        display: block;
    }

    .navbar ul li {
        position: relative;
        float: left;
    }

    .navbar ul li ul {
        position: absolute;
        top: 38px;
        left: 0;
        background: rgba(146, 146, 146, 0.9);
    }
    .navbar li ul li {
        width: 200px;
        padding: 3px;
        text-align: left;
    }
    .navbar ul li ul li {
        padding: 10px 0px;
    }
    .navbar ul li ul li a:hover {
        background: #333;
        color: #fff;
        text-shadow: 0px 0px 5px #fff;
        padding: 10px 30px 10px 2px;
    }

    



</style>