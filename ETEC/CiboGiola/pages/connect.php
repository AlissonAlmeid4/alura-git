<?php
    if( !@$con = mysqli_connect('localhost', 'root', '', 'bd_cibogiola')){
        echo "Erro ao acessar banco de dados";
    };
    mysqli_query($con, "SET NAMES utf8");