<?php
// String: armazena palavras ou caracteres

echo 'STRING <br />';
$nome = 'Junior ...................................';
$abreviatura = 'J';

var_dump($nome); // var_dump(): retorna o dado, o tipo de dado e comprimento de dado. Todos detalhes possíveis do dado;
echo '<hr />';

echo 'INT';
// integer: int - números inteiros: de infinito a infinito;
$numero = 2020;
var_dump($numero);

echo 'FLOAT <br />';
// float / double: decimais: números com ponto de flutuação
$decimal = 20.20;
echo '<hr />';
var_dump($decimal);
echo '<hr />';

echo 'BOOL <br />';
// booleanos: true / false
$casado = true;
$divorciado = false;
echo $casado;
// echo '<br />';
echo $divorciado;
echo '<hr />';

echo 'ARRAYS <br />';
// arrays: dados compostos, como caixas que armazenam mais de um valor

$estudantes = 
['Buque', 'Eurico', 'Afonso', 'Francisco', 'Pedro',
'Suaibo', 'Thembo', 'Fortunato', 
'Mais Novos' => ['baixinho' => 'Felizardo', 'Fortunato']
];

echo '<pre>';
print_r($estudantes);
echo '</ pre>';
print_r($estudantes['Mais Novos']['baixinho']);

echo '<hr />';
// objectos: são mais complexos, compostos e mais abstraídos. são próximos a realidade humana
echo 'OBJECT <br />';

class Caneta {
    // propriedades: o que o objecto tem.
    public $cor;
    public $marca;
    public $tamanho;
    public $transparenciaTubo;

    // métodos: o que o objecto desta classe faz
    public function escrever() {
        echo 'A caneta da marca ' . $this->marca . ' escreveu';
    }

    public function pintar() {
        echo 'A caneta de cor ' . $this->cor . ' pintou';
    }
}
    //instanciar ou crir o objecto
    $caneta1 = new Caneta();
    $caneta2 = new Caneta();

    // definir propriedade do objecto criado
    $caneta1->marca = 'BIC';

    // Chamar o método escrever
    $caneta1->escrever();
    echo '<br />';
    $caneta2->cor = 'Verde';
    $caneta2->pintar();

