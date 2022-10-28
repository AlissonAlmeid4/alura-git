<?php

require('connect.php');
extract($_FILES);
extract($_POST);
$senha = md5($senha);
if(mysqli_query($con, "INSERT INTO `tb_funcionarios` (`cod_func`,`nome`, `sexo`,`data`, `celular`,`email`,`senha`,`funcao`)
VALUES (NULL, '$nome','$sexo',concat('$ano','/','$mes','/', '$dia'),'$celular', '$email','$senha', '$funcao');")){
    $msg = "<p class=sucesso> Registro gravado com Sucesso</p>";
}else{
    $msg = "<p class=erro> Erro ao criar registro</p>";
}
session_start();
$_SESSION['msg'] = $msg;

var_dump( $_FILES);
var_dump($_POST);

header("location:cadFunc.php");