
<?php
    $texto = $_GET['texto'];
    require('connect.php');
    $produto = mysqli_query($con, "Select * from `tb_produtos` where `nomePrato` like '%$texto%' ");
    while($produtos = mysqli_fetch_array($produto)){
        echo "<div class=formulario1>";
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
      
    }
?>