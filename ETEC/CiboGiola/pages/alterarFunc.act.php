<?php
    var_dump($_POST);
    extract($_POST);
    require('connect.php');
    if(mysqli_query($con, "UPDATE `tb_funcionarios` SET `nome` = '$nome', 
                                                        `sexo` = '$sexo', 
                                                        `data` = '$data', 
                                                        `celular` = '$celular', 
                                                        `email` = '$email', 
                                                        `funcao` = '$funcao' 
                            WHERE `tb_funcionarios`.`cod_func` = '$codFunc';")){
                                $msg = "Alterado com sucesso!";
                        }else{
                                $msg = "Erro ao alterar!";
                        }
session_start();
$_SESSION['msg'] = $msg;                        
header("location:funcionarios.php");                         

