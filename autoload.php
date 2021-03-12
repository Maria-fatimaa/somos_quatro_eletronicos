<?php
    //essa função spl vai passar o nome do arquivo como parametro e incluir o arquivo
    spl_autoload_register(function($nome_arquivo)
    {

        if (file_exists('Controllers/'.$nome_arquivo.'.php')){
            require 'Controllers/'.$nome_arquivo.'.php';
        }elseif(file_exists('Core/'.$nome_arquivo.'.php')){
            require 'Core/'.$nome_arquivo.'.php';
        }elseif(file_exists('Models/'.$nome_arquivo.'.php')){
            require 'Models/'.$nome_arquivo.'.php';
        }

    });

    //verifica se o arquivo chamado é algum dentro das pastas, Controllers, Model ou Core e já faz o require
?>