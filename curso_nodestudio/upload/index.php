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
                <a href="multiplo.php">Multiplo</a>
            </li>
        </ul>
    </nav>

    <hr>

    <?php  
    
        if(isset($_POST['enviar-formulario'])) {
            $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
            $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
            
            if(in_array($extensao, $formatosPermitidos)) {
                echo "Existe";
                $pasta = "arquivos/";
                $temporario = $_FILES['arquivo']['tmp_name'];
                $novoNome = uniqid().".$extensao";

                if(move_uploaded_file($temporario, $pasta.$novoNome)) {
                    $mensagem = "Upload feito com sucesso";
                } else {
                    $mensagem = "Não foi possível fazer upload";
                }
            } else {
                $mensgem = "Formato inválido";
            }

            // echo "<pre>";
            // var_dump($_FILES);
            // echo "</pre>";
        }
    
    ?>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo" id="arquivo"><br>
        <input type="submit" name="enviar-formulario" value="Enviar">
    </form>

</body>
</html>