<?php
$id = $_GET['cod'];
require('connect.php');
extract($_POST);
    if(mysqli_query($con, "DELETE FROM `tb_categoria`
                            WHERE `tb_categoria`.`id` = '$id';")){
        header("location: cadProd.php");
    }else{
        echo "Erro ao excluir!";
    }