<?php require('sec.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
     <link rel="stylesheet" href="..\style\styleIntranet.css">


</head>
<body>
    <?php include('barraLateral.php') ?>
    <?php 
        @session_start();
        if(isset($_SESSION['msg'])){
            echo "<p class=alert> $_SESSION[msg]</p>";
            echo var_dump($_POST);
            unset($_SESSION['msg']);
        }
     require('connect.php');
     $funcionalidade = mysqli_query($con, "Select * from `tb_funcionalidades`");
        while($funcionalidades = mysqli_fetch_array($funcionalidade)){
        echo "<div class=formulario>";
         echo "<div class=dados>";
        echo "<p> Cód. $funcionalidades[id]  - Link.  $funcionalidades[link]</p>";
        echo "<p> Titulo texto 1º: $funcionalidades[titulotexto1] </p>";
        echo "<p> Texto 1º: $funcionalidades[texto1]</p>";
        echo "<p> Titulo texto 2º: $funcionalidades[titulotexto2] </p>";
        echo "<p> Texto 2º: $funcionalidades[texto2]</p>";
        echo "<div class=alterarExcluir>";
        echo "<p> <a href =alterInicio.php?cod=$funcionalidades[id]>Alterar</a>
             <a href =javascript:confirmar($funcionalidades[id])>Excluir</a></p>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    ?>
 <script>
    function confirmar(codigo) {
        resposta = confirm("Deseja excluir o registro "+codigo+"?");
        if(resposta == true){
            window.location = "excluirInicio.php?cod="+codigo;
        }
    }
</script>
</body>
</html>