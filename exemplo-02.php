<?php

/*Ano Nascimento
$anoNascimento = 1997;
*/

//Nome completo do aluno
$nome = "Israel";
$sobrenome = "Bessa";

//o '.' é utilizado para concatenar
$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;

//Igual ao 'return'
exit;

//Limpando a variavel
unset($nomeCompleto);

if(isset($nomeCompleto)){
	echo $nomeCompleto;
}
else{
	echo "Variavel não definida";
}
?>