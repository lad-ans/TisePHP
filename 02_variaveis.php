<?php
// variáveis: depósito, container, para receber dados

$nome = 'Above';
$apelido = 'Corporate';

// um mês depois
echo 'O primeiro nome é: ' . $nome;
echo '<br />';
echo $apelido;

echo '<hr />';
// concatenação
echo "$nome " . "$apelido";
echo '<br />';
$numero_um = 1;
$numero_dois = 2;
echo $numero_um . $numero_dois;


echo '<hr />';
$variavel_muito = 'Muito';
$variavel_bem = 'Bem';

print $variavel_muito . "$variavel_bem";
echo '<br />';
$a = 1;
$b = 2;
$c = 3;

print "$a " . $b . $c;

echo '<hr />';
define('CURSO', 'Técnico de Informática e Seg. Electrónica');
echo 'A variável constante é: ' . CURSO;
echo '<br />';

define('CURSO' ,'Técnico de Electrónica');
echo 'A variável constante é: ' . CURSO;




