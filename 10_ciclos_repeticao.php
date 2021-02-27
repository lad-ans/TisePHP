<?php
// while: enquanto
$contador = 0;
$pinWhile = '1234';
while ($contador < 16){
    echo "$contador - ";
    $contador++;
}
echo '<hr />';
echo 'WHILE <br />';
while ($pinWhile == '12345'){
    echo 'Pin correcto <br />';
    $pinWhile = '12345';
}

$pinDoWhile = '1234';
echo '<hr />';
echo 'DO-WHILE <br />';
// do-while: faça - enquanto
do {
    echo "$contador - ";
    $contador++;
} while ($contador < 16);
echo '<hr />';
while ($pinDoWhile == '12345'){
    echo 'Pin Do-While correcto <br />';
    $pinDoWhile = '12345';
}
echo '<hr />';
// for: simples e linear
for($numero = 2; $numero < 10; $numero++){
    echo "Número é: $numero <br />";
}




