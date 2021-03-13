<?php
class Ambiente{
        public static function load($dir){
            if (!file_exists($dir."/.env"))
            {
                return false;
            }else
            {
                $linhas = file($dir."./.env");
                foreach ($linhas as $linha) {
                    putenv((trim($linha)));
                }
            }
        }
    }
?>