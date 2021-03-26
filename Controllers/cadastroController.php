<?php

Class cadastroController extends Controller{ //unico arquivo obrigatorio ter uma funcao chamada index, tbm pela regra criada nas rotas
    public function index()
    {
        $this->carregarTemplate('cadastro');
    }

}

?>