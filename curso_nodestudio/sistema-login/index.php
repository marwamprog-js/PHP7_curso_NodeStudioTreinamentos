<?php 
session_start();

//Conexao;
require_once "db_connect.php";


if(isset($_POST['btn-entrar'])) {
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($login) or empty($senha)) {
        $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
    } else {
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0) {
            $senha = md5($senha);

            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);
            mysqli_close($connect);

            if(mysqli_num_rows($resultado) == 1) {

                $dados = mysqli_fetch_array($resultado);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];

                header('location: home.php');

            } else {
                $erros[] = "<li>Usuário/senha inválidos</li>";
            }

        } else {
            $erros[] = "<li>Usuário inexistente</li>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    
    <div class="container">
        <h1>Login</h1>
        <?php  
            if(!empty($erros)):
                foreach($erros as $erro):
                    echo $erro;
                endforeach;
            endif;
        ?>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            Login: <input type="email" name="login"><br>
            Senha: <input type="password" name="senha"><br>
            <button type="submit" name="btn-entrar"> Entrar </button>
        </form>
    </div>

</body>
</html>