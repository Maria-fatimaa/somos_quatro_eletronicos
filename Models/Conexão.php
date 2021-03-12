<?php

 class Conexao{
    private static $instancia;

    private function __construct(){}

    public static function getConexao(){
        if (!isset(self::$instancia)) 
        {
           $dbname = "somos_quatro_eletronicos";
            $host = "localhost";
            $user = "root";
            $password = "";
        }
        try {
            self::$instancia = new PDO('mysql:dbname='.$dbname.';host='.$host,$user,$password);
        } catch (Exception $e) {
            echo 'Erros: '.$e;
        }
        return self::$instancia;  
    }    
 }


?>