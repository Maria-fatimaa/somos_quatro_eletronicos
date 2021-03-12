<?php
//todos os controlles que estiverem na pasta controllers precisarão herdar dessa classe aqui
Class Controller{
    public $dados;

    public function __construct()
    {
        $this->dados = array();
    }

    public function carregarTemplate($nomeView, $dadosModel = array())
    {
        $this->dados = $dadosModel;
       require 'Views/template.php';
    }

    public function carregarViewNoTemplate($nomeView, $dadosModel = array())
    {
       extract($dadosModel);
        require 'Views/'.$nomeView.'.php';
    }
    
}

?>