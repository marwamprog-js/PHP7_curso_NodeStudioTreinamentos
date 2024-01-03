<?php

namespace app\model;

class Conexao {

    private static $instance;

    public static function getConn() {
        if(!isset(self::$instance)) {
            self::$instance = new \PDO('mysql:host=mysql;dbname=curso-app_db;charset=utf8', 'root', 'root');
        }
        
        return self::$instance;
        
    }

}


?>