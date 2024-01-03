<?php

require_once 'vendor/autoload.php';

use app\model\Produto;
use app\model\ProdutoDAO;

$produto = new Produto();
$produto->setId(1);
$produto->setNome("Monitor 19 Polegadas");
$produto->setDescricao("Monitor Sansung");

$produtoDAO = new ProdutoDAO();
// $produtoDAO->update($produto);
$produtoDAO->delete(1);
//$produtoDAO->create($produto);
// $produtos = $produtoDAO->read();

// if(!empty($produtos)) {
//     foreach($produtos as $produto) {
//         echo $produto['id']."<br>".
//             $produto['nome']."<br>".
//             $produto['descricao']."<br><br>";
//     }
// }



echo "<pre>";
print_r($produtos);
echo "</pre>";

// echo "<pre>";
// var_dump($produto);
// echo "</pre>";


?>