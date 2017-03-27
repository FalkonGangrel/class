<?php
//$_GET['Nome do campo'] - Pega valor do formulário via get
//$_POST['Nome do campo']  - Pega valor do formulário via post

$nome = $_GET['a'];
$numero = (int)$_GET['b'];
$ip = $_SERVER['REMOTE_ADDR'];
$ip2 = $_SERVER['SCRIPT_NAME'];

echo $nome;
echo "<BR>";
var_dump($nome);

echo "<BR>";
echo $numero;
echo "<BR>";
var_dump($numero);

echo "<BR>";
echo $ip;
echo "<BR>";
var_dump($ip);

echo "<BR>";
echo $ip2;
echo "<BR>";
var_dump($ip2);

?>