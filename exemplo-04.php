<?php

/*
O '$_GET[] pega valores a partir da URL acessada pelo navegador
o que vai entre os '[]' é o nome da variavel que vai se igualar na 
url, p.e. localhost/php/exemplo-04.php?a=Israel
*/

$nome = $_GET["a"];

//var_dump($nome);

/*
Todos dados pegos pelo $_GET[] são string, para se converter faz-se 
isto:
*/

$ano = (int)$_GET["ano"];
//var_dump($ano);

//http://localhost/php/exemplo-04.php?a=Israel&ano=1997


//$ip = $_SERVER["REMOTE_ADDR"];
//$ip = $_SERVER["SCRIPT_NAME"];
echo $ip;

?>