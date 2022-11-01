<?php

?>
 <link rel="stylesheet" href="..\style\barraLateral.css">
<nav class="barramenu">
    <div class="logo" class="nav-links">
        <img src="..\Imgs\LogoG&C.png" alt="Logo">    
    </div>
    <div class="barralateral">
        <ul>
            <li class="titulo">Produtos</li>
            <li class="subtitulo"><a href="..\pages\produtos.php">Produtos</a>
            <ul>
                <li class="biSubtitulo"><a href="..\pages\cadProd.php">-- Cadastrar Produto</a></li>
                <li class="biSubtitulo"><a href="..\pages\produtosCli.php">-- Comprar Produto</a></li>
            </ul>
        </li>
        <li class="subtitulo"><a href="..\pages\funcionarios.php">Funcionários</a>
            <ul>
                <li class="biSubtitulo"><a href="..\pages\cadFunc.php">-- Cadastrar Funcionário</a></li>
                
            </ul>
        </li>
        <li class="subtitulo"><a href="..\pages\inicio.php">index Page</a>
                        <ul>
                <li class="biSubtitulo"><a href="..\pages\cadInicio.php"></a></li>
                
            </ul>
        </li>
            <li><button type="button" class="btnsair" onclick="sair()">Sair</button></li>
        </ul>
    </div>
</nav>
 <script src="..\src\pages.js"></script>