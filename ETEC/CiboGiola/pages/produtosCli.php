<?php require('sec.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cibo & Giola</title><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="..\style\estilo.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
<?php include('barraLateral.php'); ?>


<div class="fundoProduto">
    <div class="categoria">
        <h3>Cárdapio</h3>
     <nav class="lista">
        <nav class="lista">
<?php
    @session_start();
    if(isset($_SESSION['msg'])){
        echo "<p class=alert> $_SESSION</p>";
        unset($_SESSION['msg']);
    }
require('connect.php');
$subcategorias = mysqli_query($con, "Select * from `tb_produtos` GROUP BY subcategoria ORDER BY subcategoria ");
$produto = mysqli_query($con, "Select * from `tb_produtos` ");


while($produtos = mysqli_fetch_array($produto)){
    while($subcategoria = mysqli_fetch_array($subcategorias)){
        echo "<button onclick=viewsub2()>$subcategoria[subcategoria]</button>";
        echo "<div id=subcategoria2 class=subcategoria>";
        echo "<ul>";
        echo "<li>R$ $produtos[valorPrato]  -  $produtos[nomePrato]<button type=button onclick=addBrusctra()>Add/Remover</button></li>";
        echo "<li>R$ $produtos[valorPrato]  -  $produtos[nomePrato]<button type=button onclick=addBrusctra()>Add/Remover</button></li>";
        echo "<li>R$ $produtos[valorPrato]  -  $produtos[nomePrato]<button type=button onclick=addBrusctra()>Add/Remover</button></li>";
        echo "</ul>";
        echo" </div>  ";
    }
}
?>
</nav>    
</div>



    <nav class="carrinho">
        <h2>Carrinho de Compras</h2>
        <div id="BruschettaTradicional" class="listaCarrinho">
            <h5><button type="button" onclick="addBrusctra()">Bruschetta Tradicional</button></h5>
            <input type="number" class="qtde" id="brusQt1" oninput="CalculaBruscheta1()" >
            <nav id="exibirBrusc1" class="exibir"></nav>            
            <button type="button" id="btnCar" onclick="addBrusctra()">Add/Remover</button>  
        </div>
        <div id="Bruschettabrie" class="listaCarrinho">
            <h5><button type="button" onclick="addBruscbrie()">Bruschetta de Brie</button></h5>
            <input type="number" class="qtde" id="brusQt2" oninput="CalculaBruscheta2()" >
            <nav id="exibirBrusc2" class="exibir"></nav>
            <button type="button" id="btnCar" onclick="addBruscbrie()">Add/Remover</button>
        </div>
        <div id="BruschettaMussarela" class="listaCarrinho">
            <h5><button type="button" onclick="addBruscmuss()">Bruschetta Mussarela</button></h5>
            <input type="number" class="qtde" id="brusQt3" oninput="CalculaBruscheta3()" >
            <nav id="exibirBrusc3" class="exibir"></nav>
            <button type="button" id="btnCar" onclick="addBruscmuss()">Add/Remover</button>
        </div>

        <div id="MacarraoEspaguete" class="listaCarrinho">
            <h5><button type="button" onclick="addMacEsp()">Macarrão Espaguete</button></h5>
            <input type="number" class="qtde" id="MussQt1" oninput="CalculaMacarrao1()" >
            <nav id="exibirMuss1" class="exibir"></nav>            
            <button type="button" id="btnCar" onclick="addMacEsp()">Add/Remover</button>  
        </div>
        <div id="MacarraoMussarela" class="listaCarrinho">
            <h5><button type="button" onclick="addMacMuss()">Macarrão Mussarela </button></h5>
            <input type="number" class="qtde" id="MussQt2" oninput="CalculaMacarrao2()" >
            <nav id="exibirMuss2" class="exibir"></nav>
            <button type="button" id="btnCar" onclick="addMacMuss()">Add/Remover</button>
        </div>
        <div id="MacarraoCachos" class="listaCarrinho">
            <h5><button type="button" onclick="addMacCac()">Macarrão de Cachos</button></h5>
            <input type="number" class="qtde" id="MussQt3" oninput="CalculaMacarrao3()" >
            <nav id="exibirMuss3" class="exibir"></nav>
            <button type="button" id="btnCar" onclick="addMacCac()">Add/Remover</button>
            <nav id="exibirCalculo" class="exibir"></nav>
        </div>  
        <button type="button" class="btnComprar" onclick="login()">Comprar</button>
    </nav>
</div>


<div id="fundologin">
    <?php include('fundoLogin.php'); ?>
</div> 
<script src="..\src\pages.js"></script>
<script>
    $('#fundologin').fadeOut(0);
    $('#subcategoria1').fadeOut(0);
    $('#subcategoria2').fadeOut(0);
    $('#subcategoria3').fadeOut(0);
    $('#subcategoria4').fadeOut(0);
    $('#BruschettaTradicional').fadeOut(0);
    $('#Bruschettabrie').fadeOut(0);
    $('#BruschettaMussarela').fadeOut(0);
    $('#MacarraoEspaguete').fadeOut(0);
    $('#MacarraoMussarela').fadeOut(0);
    $('#MacarraoCachos').fadeOut(0);
</script>
</body>
</html>