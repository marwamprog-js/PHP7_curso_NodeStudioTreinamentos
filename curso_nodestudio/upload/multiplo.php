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

    <hr>

    <?php  
    
        if(isset($_POST['enviar-formulario'])) {
            $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
            $quantidadeArquivos = count($_FILES['arquivo']['name']);
            $contador = 0;

            while($contador < $quantidadeArquivos):

                $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);
            
                if(in_array($extensao, $formatosPermitidos)) {
                    echo "Existe";
                    $pasta = "arquivos/";
                    $temporario = $_FILES['arquivo']['tmp_name'][$contador];
                    $novoNome = uniqid().".$extensao";

                    if(move_uploaded_file($temporario, $pasta.$novoNome)) {
                        echo "Upload feito com sucesso para $pasta.$novoNome<br>";
                    } else {
                        echo"Não foi possível fazer upload $temporario <br>";
                    }
                } else {
                   echo "$extensao não é permitida <br>";
                }

                $contador++;

            endwhile;

            

            // echo "<pre>";
            // var_dump($_FILES);
            // echo "</pre>";
        }
    
    ?>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo[]" id="arquivo" multiple><br>
        <input type="submit" name="enviar-formulario" value="Enviar">
    </form>

</body>
</html>