<?php

$nome = "Israel";

function teste(){
	global $nome;
	echo $nome;
}

function teste2(){
	$nome = "Nome ";
	echo $nome." teste 2";
}

teste();
teste2();

?>