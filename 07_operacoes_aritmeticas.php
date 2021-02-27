<?php
$valor1 = 10;
$valor2 = 5;
// soma: +
$soma = $valor1 + $valor2;
echo "$valor1 + $valor2 = $soma <br />";

// subtração: -
$subtracao = $valor1 - $valor2;
echo "$valor1 - $valor2 = $subtracao <br />";

// Multiplicação: *
$multiplicacao = $valor1 * $valor2;
echo "$valor1 x $valor2 = $multiplicacao <br />";

// Divisão: /
$divisao = $valor1 / $valor2;
echo "$valor1 : $valor2 = $divisao <br />";

// Resto da divisão / módulo: %
$restoDivisao = $valor1 % $valor2 ;
echo "$valor1 : $valor2 resta = $restoDivisao <br />";

// Potenciação: $base ** $expoente
$potencia = $valor1 ** $valor2;
echo "$valor1^$valor2 = $potencia <br />";

// Raiz quadrada
$raizQuadrada = sqrt($valor1);
echo "Raiz quadrada de $valor1 = $raizQuadrada";

// caso de uso
echo '<hr />';

echo 2 + 3 * 4 / 2;
