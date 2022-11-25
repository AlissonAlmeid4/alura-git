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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script>
        function pesquisa(texto){
            $.ajax({
                type: "post",
                url: "pesquisa.act.php?texto="+texto,
                success: function(response){
                    $('#result').html(response);
                }
            });
        };
    </script>
</head>
<body>
    <?php include('barraLateral.php') ?>
    <div class="pesquisar">
        <p class="pesquisa">Pesquisar <input type="text"  onKeyup="pesquisa(this.value)"></p>
            <div id="result"></div>
    </div>
    <?php 
        @session_start();
        if(isset($_SESSION['msg'])){
            echo "<p class=alert> $_SESSION</p>";
            echo var_dump($_POST);
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
            window.location = "excluirProduto.php?cod="+codigo;
        }
    }
</script>
</body>
</html>