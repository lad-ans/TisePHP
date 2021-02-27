<?php
require_once '../controllers/conexao_controller.php';

class ClienteModel {
    public String $nome;
    public String $contacto;
    public float $valor;

    // att conexão controller
    public $conexaoController;
    
    // constructor
    public function __construct($db_name, $host, $user, $password){
        $this->conexaoController = new ConexaoController($db_name, $host, $user, $password);
    }

    public function obterPdo(){
        return $this->conexaoController->pdo;
    }


}



