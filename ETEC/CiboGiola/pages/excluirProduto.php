<?php
$codProduto = $_GET['cod'];
require('connect.php');
extract($_POST);
    if(mysqli_query($con, "DELETE FROM `tb_produtos`
                            WHERE `tb_produtos`.`codProd` = '$codProduto';")){
        header("location: produtos.php");
    }else{
        echo "Erro ao excluir!";
    }