<?php
$cod = $_GET['cod'];
require('connect.php');
extract($_POST);
    if(mysqli_query($con, "DELETE FROM `tb_funcionalidades`
                            WHERE `tb_funcionalidades`.`id` = '$cod';")){
        header("location: inicio.php");
    }else{
        echo "Erro ao excluir!";
    }