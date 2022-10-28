<?php require('sec.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
     <link rel="stylesheet" href="..\style\styleIntranet.css">
          <link rel="stylesheet" href="..\style\produtos.css">


</head>
<body>
    <?php include('barraLateral.php') ?>
    <?php 
        @session_start();
        if(isset($_SESSION['msg'])){
            echo "<p class=alert> $_SESSION</p>";
            unset($_SESSION['msg']);
        }
     require('connect.php');
     $produto = mysqli_query($con, "Select * from `tb_produtos`");
        while($produtos = mysqli_fetch_array($produto)){
        echo "<div class=formulario>";
        echo "<div class=img>";
        echo "<p><img src=$produtos[imagem]></p>";
        echo "</div>";
         echo "<div class=dados>";
        echo "<p> Cód. $produtos[codProd]  -  $produtos[nomePrato]</p>";
        echo "<p> Tipo Produto: $produtos[tipo] / SubCategoria: $produtos[subcategoria]</p>";
        echo "<p> Tempo de preparo: $produtos[tempoPreparo] / Valor prato: $produtos[valorPrato]</p>";
        echo "<p> Descrição: $produtos[descricao]</p>";
        echo "<div class=alterarExcluir>";
        echo "<p> <a href =alterar.php?cod=$produtos[codProd]>Alterar</a>
             <a href =javascript:confirmar($produtos[codProd])>Excluir</a></p>";
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