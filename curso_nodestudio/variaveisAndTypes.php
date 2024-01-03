<?php

$carros = array("Gol", "Fiat", 12, "Chevete", true);

var_dump($carros);

if(is_array($carros)) {
    echo "Sim é array";
} else {
    echo "Não é um array";
}

echo "<br /><br /><br />";

class Cliente {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
}

$cliente = new Cliente("Marwam");
var_dump($cliente);

?>

<hr>
<a href="index.php">Voltar</a>