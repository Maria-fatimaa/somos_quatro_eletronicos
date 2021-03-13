<?php

    require 'ambiente.php';

    Ambiente::load(__DIR__);


    class Conexao{
        private static $instancia;

        private function __construct(){}

        public static function getConexao(){
            if (!isset(self::$instancia)) 
            {
                $dbname = getenv("BANCO_NOME");
                $host = getenv("BANCO_HOST");
                $user = getenv("BANCO_USUARIO");
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