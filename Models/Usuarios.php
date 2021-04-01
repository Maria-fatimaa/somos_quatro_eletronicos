<?php

require_once "Conexao.php";

    class Usuarios{
        private $con;
        public function __construct()
        {
            $this->con = Conexao::getConexao();
        }

        public function getUsuarios()
        {
            $info = array();
            $sql = $this->con->query("SELECT nome FROM usuarios WHERE id=1");
           
            $info = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $info;
        }
        public function setUsuarios()
        {
    
            if (isset($_POST['acao'])){ 
                echo "Aqui";
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                if ($nome != null && $email != null){
                    $sql = $this->con->prepare("INSERT INTO usuarios VALUES (null,?,?)");
                    $sql->execute(array($nome,$email));
                    return 'Cadastro com sucesso!';
                }else{
                   return "Alguns campos não foram preenchidos corretamento!";
                }
            }
        }
    }
?>