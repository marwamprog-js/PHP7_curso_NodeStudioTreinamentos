<?php
session_start();

require_once "db_connect.php";

if(!$_SESSION['logado']) {
    header('Location: index.php');
}

$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Página Restrita</h1>
    <h2>Olá <?php echo $dados['nome']; ?></h2>

    <ul>
        <li>
            <a href="logout.php">Logout</a>
        </li>
    </ul>

</body>
</html>