<?php

echo "#### is_array() <br>";
$nomes = array("Primo" => "Rodrigo", "vizinho" => "Thiago", "Tia" => "Samira");

if(is_array($nomes)) {
    echo "É um array";
} else  {
    echo "Não é um array";
}

echo "<br><br>";
echo "------------------------------------------------<br>";

echo "#### in_array() <br>";
$pesquisa = "Rodrigo";

if(in_array($pesquisa, $nomes)) {
    echo "O nome ".$pesquisa." existe no array";
} else  {
    echo "O nome ".$pesquisa." não existe no array";
}
echo "<br><br>";
echo "------------------------------------------------<br>";

echo "#### array_keys() <br>";
$keys = array_keys($nomes);
print_r($keys);

echo "<br><br>";
echo "------------------------------------------------<br>";

echo "#### array_merge() <br>";

$carros = ["Camaro", "Uno", "Gol"];
$motos = ["Pop100", "50cc", "cb1000"];

$veiculos = array_merge($carros, $motos);

echo "<pre>";
print_r($veiculos);
echo "</pre>";

echo "<br><br>";
echo "------------------------------------------------<br>";

echo "#### array_pop() <br>";

echo array_pop($veiculos);
echo "<pre>";
print_r($veiculos);
echo "</pre>";


echo "<br><br>";
echo "------------------------------------------------<br>";


echo "<br><br>";
//explode("/", "20/01/2001") = transforma string em array
//implode("-", $arr) = transforma array em string

$data = "30/02/2018";
$novaData = explode("/", $data);
print_r($novaData);

echo "<br><br>";

$frase = "Meu nome não é Jone";
$arr = explode(" ", $frase);
print_r($arr);

$novaFrase = implode(" ", $arr);
echo "<br>".$novaFrase;



?>


<hr>
<a href="index.php">Voltar</a>