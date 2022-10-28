<?php

require('connect.php');
extract($_FILES);
extract($_POST);
$endereco = "imgs/".md5(time()).".jpg";
move_uploaded_file($imagem['tmp_name'], $endereco);
if(mysqli_query($con, "INSERT INTO `tb_produtos` (`codProd`,`imagem`, `nomePrato`,`tipo`, `subcategoria`,`descricao`,`tempoPreparo`,`valorPrato`)
VALUES (NULL, '$endereco','$nomePrato','$tipo','$subcategoria', '$descricao','$tempoPreparo', '$valorPrato');")){
    $msg = "<p class=sucesso> Registro gravado com Sucesso</p>";
}else{
    $msg = "<p class=erro> Erro ao criar registro</p>";
}
session_start();
$_SESSION['msg'] = $msg;

var_dump( $_FILES);
var_dump($_POST);
var_dump( $endereco);



header("location:cadProd.php");