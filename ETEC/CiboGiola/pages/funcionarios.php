<?php require('sec.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionarios</title>
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
     $funcionario = mysqli_query($con, "Select * from `tb_funcionarios`");
        while($funcionarios = mysqli_fetch_array($funcionario)){
        echo "<div class=formulario>";
        echo "<div class=dados>";
        echo "<p> Cód. $funcionarios[cod_func]</p>";
        echo "<p>Nome: $funcionarios[nome]</p>";
        echo "<p>Sexo: $funcionarios[sexo]</p>";
        echo "<p>Data Nascimento: $funcionarios[data]</p>";
        echo "<p> E-mail: $funcionarios[email]</p>";
        echo "<p> Celular: $funcionarios[celular]</p>";
        echo "<p> Função: $funcionarios[funcao]</p>";
        echo "<div class=alterarExcluir>";
        echo "<p> <a href =alterarFunc.php?cod=$funcionarios[cod_func]>Alterar</a>
             <a href =javascript:confirmar($funcionarios[cod_func])>Excluir</a></p>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    ?>
 <script>
    function confirmar(codigo) {
        resposta = confirm("Deseja excluir o registro "+codigo+"?");
        if(resposta == true){
            window.location = "excluir.php?cod="+codigo;
        }
    }
</script>
</body>
</html>