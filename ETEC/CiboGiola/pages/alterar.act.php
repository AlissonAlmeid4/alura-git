<?php
    var_dump($_FILES);
    extract($_FILES);
    extract($_POST);
    require('connect.php');
    if($imagem['size']>0){
        if($foto_anterior == ""){
            $endereco = "imgs/".md5(time()).".jpg";
        }else{
            $endereco = $foto_anterior;
        }
        move_uploaded_file($imagem['tmp_name'], $endereco);
    }else{
            $endereco = $foto_anterior;
    }

    if(mysqli_query($con, "UPDATE `tb_produtos` SET 
                                    `imagem` = '$endereco',
                                    `nomePrato` = '$nomePrato',
                                    `tipo` = '$tipo', 
                                    `subcategoria` = '$subcategoria',
                                    `descricao` = '$descricao',
                                    `tempoPreparo` = '$tempoPreparo',
                                    `valorPrato` = '$valorPrato'
                                    WHERE `tb_produtos`.`codProd` = '$codProd';")){
                                $msg = "Alterado com sucesso!";
                        }else{
                                $msg = "Erro ao alterar!";
                        }
session_start();
$_SESSION['msg'] = $msg;                        
header("location:produtos.php");                         