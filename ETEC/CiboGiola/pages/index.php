<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cibo & Giola</title><link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="..\style\estilo.css">

</head>
<body>
        <?php include('navbar.php'); 
        ?>
        <?php
    @session_start();
    if(isset($_SESSION['msg'])){
        echo"<p class=alert> $_SESSION[msg]</p>";
        unset($_SESSION['msg']);
    }
?>
        <?php
        require('connect.php');
        $busca = mysqli_query($con, "Select * from `tb_funcionalidades` ");
        $funcionalidade = mysqli_fetch_array($busca);
    ?>
<div class="caixavideo">
    <div class="video">
        <iframe width="65%" height="430" src="<?php echo $funcionalidade['link']; ?>" 
        title="YouTube video player" frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen></iframe>
    </div>
</div>

<div class="caixartextosuperior">
    <div class="caixatexto">
        <div class="caixa1">
            <p>
                <?php echo $funcionalidade['titulotexto1']; ?>
            </p>
            <p>
                <?php echo $funcionalidade['texto1']; ?>
            </p>
        </div>
        <div class="caixa2">
            <p>
                <?php echo $funcionalidade['titulotexto2']; ?>
            </p>
            <p>
                <?php echo $funcionalidade['texto2']; ?>
            </p>
        </div>
    </div>
</div>

 <div id="fundologin">
    <?php include('fundoLogin.php'); ?>
</div> 

<script src="..\src\pages.js"></script>
<script>
    $('#fundologin').fadeOut(0);
    
    var x = document.getElementById("fundologin");
    x.style.display = 'none';
    
</script>
</body>
</html>