<?php

//Trabalho com  datas

date_default_timezone_set('America/Sao_Paulo');

$data = date('d/m/Y H:i:s', time()+(60*10)); //time -> adiciona 10 minutos na hora atual

echo $data;