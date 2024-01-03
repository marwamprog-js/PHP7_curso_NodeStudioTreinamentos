<?php

$nome = "rodrigo oliveira";
$upperNome = strtoupper($nome);
echo "strtoupper => ".$upperNome."<br>";
$lowerNome = strtolower($nome);
echo "strtolower => ".$lowerNome."<br>";

echo "<hr>";

$mensagem = "Olá mundo";
echo "strtolower => " . substr($mensagem, 4, 6);

echo "<hr>";

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 10, "**", STR_PAD_BOTH);
echo $novoObjeto;


echo "<hr>";

$texto = str_repeat("Sucesso! ", 5);
echo $texto;

echo "<hr>";

$mensagem = "Olá mundo";
echo strlen($mensagem);

echo "<hr>";

$texto = "A seleção Argentina será campeã da copa do mundo de 2018.";
$novoTexto = str_replace("Argentina", "Brasileira", $texto);
echo $novoTexto;

echo "<hr>";

echo strpos($texto, "copa");



?>


<hr>
<a href="index.php">Voltar</a>