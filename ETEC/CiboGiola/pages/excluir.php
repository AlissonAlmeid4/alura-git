<?php
$codFunc = $_GET['cod'];
require('connect.php');
extract($_POST);
    if(mysqli_query($con, "DELETE FROM `tb_funcionarios`
                            WHERE `tb_funcionarios`.`cod_func` = '$codFunc';")){
        header("location: funcionarios.php");
    }else{
        echo "Erro ao excluir!";
    }