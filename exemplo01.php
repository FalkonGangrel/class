<?php
//line comment
$nome = 'Teste de Nome';

$nome1 = 'Nome de Teste';

$nomeCompleto = $nome.' '.$nome1;

$idade = 40.5;
/*
	block comment
*/
echo $nome;
echo "<br><br>";
echo $nomeCompleto;
exit;
echo "<br><br>";
echo $idade;
unset($nome,$idade);
echo "<br><br>";
if(isset($nome)){
	var_dump($nome);
}
echo "<br><br>";
if(isset($idade)){
	var_dump($idade);
}
?>