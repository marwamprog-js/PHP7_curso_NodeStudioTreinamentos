<?php
session_start();
session_unset();//Limpar
session_destroy();//destruir

header("Location: index.php");

?>