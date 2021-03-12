<?php
//Vou chamar de Core porque é o inicio de tudo
    class Core
    {
        public function __construct()
        {
            $this->run();
        }
        public function run()
        {
            $parametros = array();
            if (isset($_GET['pag']))
            {
                $url = $_GET['pag'];
            }
            //possui informação após domínio www.ste.com/
            //classe/funcao/parametros
            if (!empty($url))
            {
                $url = explode('/',$url);
                $controller = $url[0].'Controller'; //primeiro parametro do GET
                array_shift($url); //retira a primeira posicao
                //'1',2,3
                //Se o usuario mandou funcao
                if (isset($url[0]) && (!empty($url[0])))
                {
                    $metodo = $url[0];
                    array_shift($url);
                }else  //mandou somete a classe sem metodo
                {
                    $metodo = 'index';
                }

                if(count($url) > 0)
                {
                    $parametros = $url;
                }
            }else
            {
                $controller = 'homeController';
                $metodo = 'index';
            }

            $caminho = 'somos_quatro_eletronicos/Controllers/'.$controller.'.php';

            if((!file_exists($caminho)) && (!method_exists($controller, $metodo)))
            {

                $controller = 'homeController';
                $metodo = 'index';              
            }

            $c = new $controller; //estanciar a variavel que esta dentro da variavel
            //echo "Aqui";
            call_user_func_array(array($c,$metodo),$parametros);
            //echo "Depois";
        }
    }

?>