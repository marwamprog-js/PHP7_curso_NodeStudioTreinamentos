
<?php 

    if(isset($_POST['enviar-formulario'])):
        
        $erros = array();

        if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
            $erros[] = "Idade precisa ser um inteiro";
        endif;

        if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
            $erros[] = "E-mail inválido";
        endif;

        if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
            $erros[] = "Peso precisa ser um float";
        endif;

        if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
            $erros[] = "IP Inválido";
        endif;

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
                <a href="sintetizacao.php">Sintetização</a>
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
            <label for="peso">Peso: </label>
            <input type="text" name="peso" id="peso">
        </div>
        <div class="form-control">
            <label for="ip">IP: </label>
            <input type="text" name="ip" id="ip">
        </div>
        <div class="form-control">
            <label for="email">Email: </label>
            <input type="text" name="email" id="email">
        </div>
        <button type="submit" name="enviar-formulario">Enviar</button>
    </form>

</body>
</html>