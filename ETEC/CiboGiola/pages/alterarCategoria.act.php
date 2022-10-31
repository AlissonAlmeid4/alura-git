<?php
    var_dump($_POST);
    extract($_POST);
    require('connect.php');
    if(mysqli_query($con, "UPDATE `tb_categoria` SET `subcategoria` = '$subcategoria', 
                            WHERE `tb_categoria`.`id` = '$id';")){
                                $msg = "Alterado com sucesso!";
                        }else{
                                $msg = "Erro ao alterar!";
                        }
session_start();
$_SESSION['msg'] = $msg;                        
//header("location:cadProd.php");                         

