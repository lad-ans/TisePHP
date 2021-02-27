<?php
class Pessoa {
    // ======================
    // ATRIBUTOS
    // ======================
    public String $nome;
    public int $idade;
    public float $altura;
    public String $sexo;
    public String $raca;
    public bool $estadoCivil;

    // ======================
    // MÉTODOS
    // ======================
    public function chorar(){
        return 'Nasceu uma pessoa e chorou <br />';
    }
    
    // ======================
    // CONSTRUCTOR: o primeiro método a ser chamado
    // ======================
    public function __construct($corPele){
       $this->raca = $corPele;
       echo $this->chorar();
    }

    public function falar(){
        return 'Falou';
    }

    public function andar(){

    }
    public function pensar(){

    }

    public function comer(){

    }

    public function dormir(){

    }

    public function gerarPessoa(){
        return "A pessoa chama-se $this->nome, é do sexo $this->sexo, 
        e tem a raça $this->raca <br />";
    }
}

$pessoaNegra = new Pessoa('Negra');
$pessoaNegra->nome = 'Francisco';
$pessoaNegra->sexo = 'Masculino';
echo $pessoaNegra->gerarPessoa();
// 
echo '<hr />';
$pessoaBranca = new Pessoa('Branca');
$pessoaBranca->nome = 'Mulungo';
$pessoaBranca->sexo = 'Feminino';
echo $pessoaBranca->gerarPessoa();

