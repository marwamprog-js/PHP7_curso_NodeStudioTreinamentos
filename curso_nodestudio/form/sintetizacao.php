
<?php 

    if(isset($_POST['enviar-formulario'])):
        
        $erros = array();

       // Sanitize
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    
        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        if(!filter_var($idade, FILTER_VALIDATE_INT)) {
            $erros[] = "Idade precisa ser um inteiro";
        }

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erros[] = "E-mail inválido";
        }


        if(!empty($erros)) {
            foreach($erros as $erro):
                echo "<li> $erro </li>";
            endforeach;
        } else {
            echo "Parabéns, seus dados estão corretos";
        }

    endif;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <nav>
        <ul>
            <li>
                <a href="index.php">Voltar</a>
            </li>
        </ul>
    </nav>

    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-control">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome">
        </div>
        <div class="form-control">
            <label for="idade">Idade: </label>
            <input type="text" name="idade" id="idade">
        </div>
        <div class="form-control">
            <label for="email">Email: </label>
            <input type="text" name="email" id="email">
        </div>
        <button type="submit" name="enviar-formulario">Enviar</button>
    </form>

</body>
</html>