<?php

//Conexao com o banco de dados
$servername = "mysql";
$username = "root";
$password = "root";
$dbname = "sistema_login_db";


$connect = mysqli_connect($servername, $username, $password, $dbname) or die(mysqli_connect_error());



?>