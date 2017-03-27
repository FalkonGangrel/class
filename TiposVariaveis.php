<?php
//Tipos Básicos

$sNome = "Nome";
$sSite = 'www.sobrefavoritos.com.br';

$valorInteiro = 10;
$valorFlutuante = 10.01;

$bBooleano = false;

//Tipos Compostos

$aArray = array("texto1","texto2",10,20);
echo $aArray[0]."<br><br>".$aArray[2]."<br><br>";

$dObjetoData = new DateTime();
var_dump($dObjetoData);
echo "<br><br>";

//Tipos Especiais

$rResource = fopen("TiposVariaveis.php","r");

var_dump($rResource);
echo "<br><br>";

$nNulo = null;

var_dump($nNulo);
echo "<br><br>";


?>