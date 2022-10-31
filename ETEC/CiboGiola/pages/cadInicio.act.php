<?php

require('connect.php');
extract($_FILES);
extract($_POST);
if(mysqli_query($con, "INSERT INTO `tb_funcionalidades` (`cod`,`link`, `titulotexto1`,`texto1`, `titulotexto2`,`texto2`)
VALUES (NULL, '$link','$titulotexto1','$texto1','$titulotexto2', '$texto2');")){
    $msg = "<p class=sucesso> Registro gravado com Sucesso</p>";
}else{
    $msg = "<p class=erro> Erro ao criar registro</p>";
}
session_start();
$_SESSION['msg'] = $msg;

var_dump($_POST);



header("location:cadInicio.php");