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
        $busca = mysqli_query($con, "Select * from `tb_funcionalidades` where `cod` = '$identificador'");
        $funcionalidades = mysqli_fetch_array($busca);
    ?>

    <form action="alterInicio.act.php" method="post" class="formulario" >
        <h3>Preencha o formulário do Funcionário</h3>
          <p>
            <input type="hidden" name="identificador" value="<?php echo $funcionalidades['cod']?>" >
            Codigo Contato <?php echo $funcionalidades['cod']; ?>
        </p>
        <p>
            <label for="link" >Link video:</label>
            <textarea name="link" id="" class="link" cols="50" rows="5"><?php echo $funcionalidades['link']?></textarea>
        </p>
        <p>
            <label for="titulotexto1">Titulo texto 1º:</label>
            <textarea name="titulotexto1" class="titulotexto1" id="" cols="50" rows="3"><?php echo $funcionalidades['titulotexto1']?></textarea>
        </p>
        <p>
            <label for="texto1">Texto 1º:<label>
            <textarea name="texto1" id="" class="texto1" cols="50" rows="10"><?php echo $funcionalidades['texto1']?></textarea>
        </p>
        <p>
            <label for="titulotexto2">Titulo texto 2º:</label>
            <textarea name="titulotexto2" id="" class="titulotexto2" cols="50" rows="3"><?php echo $funcionalidades['titulotexto2']?></textarea>
        </p>
        <p>
            <label for="texto2">Texto 2º:</label>
            <textarea name="texto2" id="" class="texto2" cols="50" rows="10"><?php echo $funcionalidades['texto2']?></textarea>
        </p>

        <p>
            <input type="submit" id="alterar" value="Gravar">
            <a href="inicio.php">Voltar</a>
        </p>
    </form>
    <script src="..\src\pages.js"></script>
</body>
</html>