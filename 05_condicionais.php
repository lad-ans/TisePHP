<?php
// if-else: se:senão - estrutura de controle comum em programação

$valor = 110;

// igual: '=='
if($valor == 100){
    echo 'O valor satisfaz!';
} else {
    echo 'O valor não satisfaz!';
}
// maior: '>'
echo " <hr />";
if($valor > 100){
    echo 'O valor satisfaz!';
} else {
    echo 'O valor não satisfaz!';
}
// menor: '<'
echo " <hr />";
if($valor < 100){
    echo 'O valor satisfaz!';
} else {
    echo 'O valor não satisfaz!';
}

// maior ou igual: '>='
echo " <hr />";
if($valor >= 100){
    echo 'O valor satisfaz!';
} else {
    echo 'O valor não satisfaz!';
}

// menor ou igual: '<='
echo " <hr />";
if($valor <= 100){
    echo 'O valor satisfaz!';
} else {
    echo 'O valor não satisfaz!';
}

// diferente: '!='
echo " <hr />";
if($valor != 100){
    echo 'O valor satisfaz!';
} else {
    echo 'O valor não satisfaz!';
}

// else-if
echo " <hr />";
 if($valor == 100){
    echo 'O valor satisfaz!';
} else if ($valor > 100){
    echo 'O valor caiu na segunda condição. 
    É maior que 100! ' .$valor;
} else {
    echo 'O valor não satisfaz!';
}

echo " <hr />";
// if-else aninhado
if($valor == 110){
    if($valor > 109){
        echo 'O valor é maior que 109. valor = ' . $valor . '<br />';
        if($valor <= 500){
            echo 'O valor é menor ou igual a 500. valor = ' . $valor;
        } else {
            echo 'O valor é maior que 500. valor = ' . $valor;
        }
    } else {
        echo 'O valor é menor que 109. valor = ' . $valor;
    }
} else {
    echo 'O valor não é igual a 110';
}

/**
 * elabore um programa que imprima seu nome se sua idade 
 * é maior ou igual a 20 anos, caso contrário, se sua idade é igual a
 * 18 imprima 'demasiado bebé'
 */

//  SWITCH - CASE
echo '<hr />';
$opcao = 10;
echo 'SWITCH - CASE <br />';
switch($opcao){
    case $opcao == 10:
        echo 'Opção é igual a 10'; break;
    case $opcao == 20:
        echo 'Seleccionada a nossa opção!'; break;
    case $opcao == 30:
        echo 'Opção é igual a 10'; break;
    default:
        echo 'Nenhuma opção corresponde!';
}
