<?php require('sec.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
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
        <?php
        $identificador = $_GET['cod'];
        require('connect.php');
        $busca = mysqli_query($con, "Select * from `tb_funcionalidades` where `id` = '$identificador'");
        $funcionalidades = mysqli_fetch_array($busca);
    ?>

    <form action="alterInicio.act.php" method="post" class="formulario" >
        <h3>Preencha o formulário do Funcionário</h3>
          <p>
            <input type="hidden" name="identificador" value="<?php echo $funcionalidades['id']?>" >
            Codigo Contato <?php echo $funcionalidades['id']; ?>
        </p>
        <p>
            <label for="link" >Link video:</label>
            <input type="text" name="link" id="link" value="<?php echo $funcionalidades['link']?>">
        </p>
        <p>
            <label for="titulotexto1">Titulo texto 1º:</label>
            <input type="text" name="titulotexto1" id="" class="titulotexto1" value="<?php echo $funcionalidades['titulotexto1']?>">
        </p>
        <p>
            <label for="texto1">Texto 1º:<label>
            <input type="text" name="texto1" id="" class="texto1" value="<?php echo $funcionalidades['texto1']?>">
        </p>
        <p>
            <label for="titulotexto2">Titulo texto 2º:</label>
            <input type="text" name="titulotexto2" id="" class="titulotexto2" value="<?php echo $funcionalidades['titulotexto2']?>">
        </p>
        <p>
            <label for="texto2">Texto 2º:</label>
            <input type="text" name="texto2" id="" class="texto2" value="<?php echo $funcionalidades['texto2']?>">
        </p>

        <p>
            <input type="submit" value="Gravar">
            <a href="inicio.php">Voltar</a>
        </p>
    </form>
    <script src="..\src\pages.js"></script>
</body>
</html>