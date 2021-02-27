<?php
// necessidade de funções: agilidade, redução, racionalizar as páginas, reduzir linhas linhas de código
// evita redundância

// de forma braçal
// $nome = 'Eurico';
// $nota1 = 17;
// $nota2 = 15;
// $trabFinal = 16;

// $media = ($nota1 + $nota2 + $trabFinal) / 3;
// if($media >= 0 && $media < 10){
//     echo "Estudante $nome <b>excluiu</b> 
//           com $media valores";
// } else if($media >= 10 && $media < 14){
//     echo "Estudante $nome <b>admitiu</b> 
//           com $media valores";
// } else if($media <= 20){
//     echo "Estudante $nome <b>dispensou</b> 
//           com $media valores";
// } else {
//     echo "<color='red'> Média Inválida </color>";
// }
// echo '<hr />';

// função: function calcularMedia($param1, $param2, ... , $paramN);
// funçoes com retorno => return;

function calcularMedia($nome, $nota1, $nota2, $trabFinal){
    $media = ($nota1 + $nota2 + $trabFinal) / 3;
    if($media >= 0 && $media < 10){
        $resultado = "Estudante $nome <b>excluiu</b> 
              com $media valores";
    } else if($media >= 10 && $media < 14){
        $resultado = "Estudante $nome <b>admitiu</b> 
              com $media valores";
    } else if($media <= 20){
        $resultado = "Estudante $nome <b>dispensou</b> 
              com $media valores";
    } else {
        $resultado = "<color='red'> Média Inválida </color>";
    }
    return $resultado . '<br />';
}

echo calcularMedia('Eurico', 17, 15, 16);
echo calcularMedia('Buque', 10, 1.5, 16.9);
echo calcularMedia('Cadinho', 20, 20, 20);
echo calcularMedia('Benévolo', 17, 14, 16);
echo calcularMedia('Afonso', 17, 15, 16.9);
echo calcularMedia('Joaquim', 13, 15.7, 16);
echo calcularMedia('Fortunato', 17, 18, 19);
echo calcularMedia('Pedro', 17.6, 15, 20);
echo calcularMedia('Suaibo', 18, 15, 19);
echo calcularMedia('Thembo', 17, 19, 16);
echo calcularMedia('Ismael', 19, 19, 16);
echo calcularMedia('Felizardo', 20, 20, 20);

// funções sem retorno: VOID
$pagina
function incrementador(){
    global $pagina;
    ++$pagina;
}

function decrementador(){
    global $pagina;
    --$pagina;
}

incrementador();
decrementador();
