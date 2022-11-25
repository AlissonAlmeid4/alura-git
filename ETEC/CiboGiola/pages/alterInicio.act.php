<?php
    var_dump($_POST);
    extract($_POST);
    require('connect.php');
    if(mysqli_query($con, "UPDATE `tb_funcionalidades` SET 
                                        `link` = '$link',
                                        `titulotexto1` = '$titulotexto1',
                                        `texto1` = '$texto1',
                                        `titulotexto2` = '$titulotexto2',
                                        `texto2` = '$texto2'
                                      WHERE `tb_funcionalidades`.`cod` = '$identificador';")){
                                $msg = "Alterado com sucesso!";
                        }else{
                                $msg = "Erro ao alterar!";
                        }
session_start();
$_SESSION['msg'] = $msg;                        
header("location:inicio.php");                         

