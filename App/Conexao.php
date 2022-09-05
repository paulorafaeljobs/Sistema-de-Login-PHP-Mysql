<?php
class Conexao{
    private static $instance;
    public static function getConexao(){
    if(!isset(self::$instance)){
        self ::$instance = new \PDO ('mysql:host=localhost;dbname=loginphp','root','');
    }
        return self::$instance;
    }
    // public static function getConnect(){
    // if(!isset(self::$instance)){
    //     self ::$instance = new \PDO ('mysql:host=localhost;dbname=loginphp','root','');
    // }
    //     return self::$instance;
    // }
}

