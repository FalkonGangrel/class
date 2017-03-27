<?php
//Escopo de variável
$nome = "Teste de função";
function teste(){
	global $nome; //Definindo que a  variável que está fora será vista dentro da função
	echo $nome;
}
function teste2(){
	$nome = "agora teste 2";
	echo $nome;
}
teste();
teste2();
?>