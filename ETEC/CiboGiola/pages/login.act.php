<?php
extract($_POST);
$senha = md5($senha);
require('connect.php');

@session_start();
$busca = mysqli_query($con, "SELECT * FROM `tb_funcionarios` where `email` = '$email'");
if($busca->num_rows ==1){
    $contato = mysqli_fetch_array($busca);
    if($senha === $contato['senha']){
        $_SESSION['login'] = true;
        $_SESSION['nome'] = $contato['nome'];
        $target = "location:..\pages\intranetFunc.php";
    }else{
        $target = "location:index.php";
        $msg = "Email ou senha Invalido";
    }
}else{
    $target = "location:..\pages\index.php";
    $msg = "Email ou senha Invalido";
}
echo $email;
echo $senha;

$_SESSION['msg'] = $msg;
header($target);