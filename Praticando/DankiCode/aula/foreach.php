<?php

    $arr = array(/*'chave1'=>*/'Guilherme','João','Felipe','Mario');
/*
    foreach($arr as $key => $value){
        echo $key;
        echo '=>';
        echo $value;
        echo '<hr>';
    }
*/
//sleep(3);//aguarda 3 segundos
die();//para tudo
$total = count($arr);
    for($i = 0; $i < $total; $i++){
        echo $arr[$i];
        echo '<br/>';
    }