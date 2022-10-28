
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
    <?php include('navbar.php'); ?>

<div class="imggrande" id="imagens">
    <img src="imgs/tipo1.jpg" id="imgG1">
    <img src="imgs/bruschetta.jpg" id="img2G">
    <img src="imgs/risoto.jpg" id="img3G">
    <img src="imgs/pizza.jpg" id="img4G">
</div>
<div class="anuncios">
<?php
    @session_start();
    if(isset($_SESSION['msg'])){
        echo "<p class=alert> $_SESSION</p>";
        unset($_SESSION['msg']);
    }
require('connect.php');
$produto = mysqli_query($con, "Select * from `tb_produtos`");
while($produtos = mysqli_fetch_array($produto)){
echo "<div class=anuncio>";
echo "<div class=parteinterna>";
echo "<img src=$produtos[imagem] alt=#imgG1 id=imgmenor>";
echo "</div>";
echo "<div class=descricao>";
echo "<h3>$produtos[nomePrato]</h3>";
echo "<p>$produtos[descricao]</p>";
echo "</div>";
echo "</div>";
}
?> 
</div>

</div>
<div id="fundologin">
    <?php include('fundoLogin.php'); ?>
</div> 
<script src="..\src\pages.js"></script>
<script>
    $('#fundologin').fadeOut(0);
    $('.imggrande>img').fadeOut(0);
</script>
</body>
</html>