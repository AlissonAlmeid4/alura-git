<?php
    var_dump($_FILES);
    extract($_FILES);
    extract($_POST);
        $senha = md5($senha);

    require('connect.php');
    if(mysqli_query($con, "UPDATE `tb_funcionarios` SET 
                                    `nome` = '$nome',
                                    `sexo` = '$sexo',
                                    `data` = '$concat('$ano','/','$mes','/', '$dia')', 
                                    `email` = '$email',
                                    `celular` = '$celular',
                                    `funcao` = '$funcao',
                                    WHERE `tb_funcionarios`.`cod_func` = '$codFunc';")){
                                $msg = "Alterado com sucesso!";
                        }else{
                                $msg = "Erro ao alterar!";
                        }
session_start();
$_SESSION['msg'] = $msg;                        
header("location:funcionarios.php");                         