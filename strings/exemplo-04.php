<?php

$frase = "A repetição é a mãe da retenção";

$palavra = "mãe";

$q = strpos($frase, $palavra);

//$texto = substr($frase,0,$q);

var_dump(substr($frase,0,$q));
echo "<br>";
var_dump(substr($frase,$q + strlen($palavra), strlen($frase)));

/*
Funções String
http://php.net/manual/pt_BR/ref.strings.php
*/

?>