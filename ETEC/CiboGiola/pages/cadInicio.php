<?php require('sec.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
    <script src="src/jquery-3.6.0.min.js"></script>
    <script src="src/jQuery-Mask-Plugin-master/src/jquery.mask.js"></script>
    <link rel="stylesheet" href="..\style\styleIntranet.css">
</head>
<body>

<?php include('barraLateral.php') ?>
<?php
        @session_start();
        if(isset($_SESSION['msg'])){
            echo "<p class=alert>$_SESSION[msg]</p>";
            unset( $_SESSION['msg']);
        }
    ?>

    <form action="cadInicio.act.php" method="post" class="formulario" enctype="multipart/form-data">
        <h3>Preencha o formulário do Funcionário</h3>
        <p>
            <label for="link" >Link video:</label>
            <input type="text" name="link" id="link" placeholder="Digite o link da pagina inicial">
        </p>
        <p>
            <label for="titulotexto1">Titulo texto 1º:</label>
            <input type="text" name="titulotexto1" id="" class="titulotexto1" placeholder="Digite o titulo">
        </p>
        <p>
            <label for="texto1">Texto 1º:<label>
            <input type="text" name="texto1" id="" placeholder="Digite o texto" class="texto1">
        </p>
        <p>
            <label for="titulotexto2">Titulo texto 2º:</label>
            <input type="text" name="titulotexto2" id="" class="titulotexto2" placeholder="Digite o titulo">
        </p>
        <p>
            <label for="texto2">Texto 2º:</label>
            <input type="text" name="texto2" id="" placeholder="Digite o texto" class="texto2">
        </p>

        <p>
            <input type="submit" value="Gravar">
        </p>
    </form>
 
    <script src="..\src\pages.js"></script>
</body>
</html>