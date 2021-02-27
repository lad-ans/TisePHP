<?php
// arrays: recebem dados, muitos dados, composto
    // adendo: criando um objecto
    class MeuObjecto {
        public $nome = 'Nome do Objecto';

        public function chamarObjecto(){
            echo 'Chamou meu objecto';
        }
    }

    $meuObjecto = new MeuObjecto();
// criando o array
$meuArray = 
[
    'nome' => 'Above', 
    'numeroInteiro' => 12, 
    'numeroDecimal' => 12.3, 
    'casado' => true, 
    'estudantes' =>  
    [
        'maisVelho' => 'Carlos', 
        'Eurico',  
        3 => 'Pedro', 
        'Calisto',
        'Thembo',
        100 => 'Afonso',
        'atrasado' => 'Suaibo'
    ], 
    'objecto' => $meuObjecto
];

echo '<pre>';
// print_r($meuArray);
echo '</pre>';
// pegando os dados pela chave
echo $meuArray['estudantes'][0];
echo '<hr />';
// adicionando índice na array
$estudantes = [];

$estudantes[0] = 'Francisco';
$estudantes[] = 'Fortunato';
$estudantes[1] = 'Felizardo';
$estudantes[] = 'Suaibo';

echo '<pre>';
print_r($estudantes);
echo '</pre>';

echo '<hr />';
// arrays multidimensionais

// array simples
$mocambola = ['Costa do Sol', 'Chilgal de Tete'];
// bi-dimensional
$mambas = ['Mexer', 'Dominguês', 'Sidique', $mocambola];
// tri-dimensional
$meuArrayMultiDimensional = ['Messi', 'CR7', $mambas];

echo '<pre>';
print_r($meuArrayMultiDimensional);
echo '</pre>';