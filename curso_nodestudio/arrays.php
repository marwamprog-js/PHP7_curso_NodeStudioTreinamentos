<?php

$carros = array("BMW", "Veloster", "Hilux");
$carros[] = "Amarok";

print_r($carros);
echo $carros[0];

$clientes = ["Rodrigo", "Felipe", "Bruna"];
print_r($clientes);

echo "<hr>";

echo count($carros)."<br>";
echo count($clientes)."<br>";

//Foreach
foreach($carros as $valor) {
    echo $valor."<br>";
}

//Array associativos
$pessoa = array(
    "nome" => "Rodrigo",
    "idade" => 23,
    "altura" => 1.75
);

$pessoa["cidade"] = "Betim";

echo "<br>Dados: <br>";
foreach($pessoa as $indice => $valor) {
    echo $indice.": ".$valor."<br>";
}

echo "<br><pre>";
print_r($pessoa);
echo "</pre>";


//Arrays multidimencionais
$times = array(
    "cariocas" => array(
        "Vasco", "Fluminense"
    ),
    "Mineiros" => array(
        "campeao" => "Atletico-MG", "vice" => "America-MG"
    )
);

foreach($times["Mineiros"] as $indice => $value) {
    echo $indice.": ".$value."</br>";
}

echo "<br><pre>";
print_r($times);
echo "</pre>";



?>


<hr>
<a href="index.php">Voltar</a>