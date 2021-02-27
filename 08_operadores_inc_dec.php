<?php
$valor = 10;
// operador de incremento
    // pré-increment: ++$valor;
echo 'PRÉ-INCREMENTO <hr />';
echo 'valor: ' . $valor . '<br />';
echo 'sofrendo o pré-incremento: ' . ++$valor . '<br />';
echo 'O estado final de valor: ' . $valor . '<br />';

echo '<hr />';
$novoValor = 10;
// pós-incremento: $valor++;
echo 'PÓS-DECREMRNTO <hr />';
echo 'Novo Valor: ' . $novoValor . '<br />';
echo 'sofrendo o pós-incremento: ' . $novoValor++ . '<br />';
echo 'O estado final de novoValor: ' . $novoValor . '<br />';

echo '<hr />';
$valor1 = 20;
$valor2 = 15;

echo ++$valor1 + $valor2++;
echo '<br />';
echo $valor1 + $valor2;

// DECREMENTO: TPC

$valor = 10;
// operador de decremento
    // pré-increment: --$valor;
echo 'PRÉ-dECREMENTO <hr />';
echo 'valor: ' . $valor . '<br />';
echo 'sofrendo o pré-decremento: ' . --$valor . '<br />';
echo 'O estado final de valor: ' . $valor . '<br />';

echo '<hr />';
$novoValor = 10;
// pós-decremento: $valor--;
echo 'PÓS-DECREMENTO <hr />';
echo 'Novo Valor: ' . $novoValor . '<br />';
echo 'sofrendo o pós-decremento: ' . $novoValor-- . '<br />';
echo 'O estado final de novoValor: ' . $novoValor . '<br />';

echo '<hr />';
$valor1 = 20;
$valor2 = 15;

echo --$valor1 + $valor2--;
echo '<br />';
echo $valor1 + $valor2;