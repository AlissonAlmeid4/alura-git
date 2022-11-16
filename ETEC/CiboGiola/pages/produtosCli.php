<?php require('sec.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    while($subcategoria = mysqli_fetch_array($subcategorias)){
        echo "<button>$subcategoria[subcategoria]</button>";
        echo "<div id=subcategoria2 class=subcategoria>";
        echo "<ul>";
        $produtos = mysqli_query($con, "Select * from `tb_produtos` where `subcategoria` = '$subcategoria[subcategoria]' ");
        while($produto = mysqli_fetch_array($produtos)){
            echo "<li id=$produto[codProd] >R$ $produto[valorPrato]  -  $produto[nomePrato]<button type=button onclick=add()>Add/Remover</button></li>";
        }
        echo "</ul>";
        echo" </div>  ";
    }

$itensCarrinho = mysqli_query($con, "Select * from `tb_produtos` where codProd=1 ");
while($itensCarrinho = mysqli_fetch_array($itensCarrinho)){
echo "</nav>";
echo "</div>";
echo    "<nav class=carrinho>";
echo        "<h2>Carrinho de Compras</h2>";
echo            "<h5>$itensCarrinho[nomePrato]</h5>";
echo            "<input type=number class=qtde id=brusQt1 oninput=CalculaBruscheta1() >";
echo            "<nav id=exibirBrusc1 class=exibir></nav> ";           
echo            "<button type=button id=btnCar onclick=addBrusctra()>Add/Remover</button>  ";
echo        "</div>";
echo        "<button type=button class=btnComprar >Comprar</button>";
echo    "</nav>";
echo "</div>";
}
?>

<div id="fundologin">
    <?php include('fundoLogin.php'); ?>
</div> 

<script src="..\src\pages.js"></script>
<script>
    $('#fundologin').fadeOut(0);
    esconder();
</script>
<script>
       function add(){
            $('#subcategoria2 li').click(function(){
                console.log(this.id);
            })

    }
</script>
</body>
</html>