<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imposto</title>
</head>
<body>

<?php

// obter o IVA se salário for maior que 1000MT

if(isset($_POST['enviar'])){

    $salario = $_POST['salario'];
    
    function calcularImposto($sal){
        if($sal > 1000){
         $iva = $sal * 0.17 . ' MT';
        } else {
        $iva = 'Não tem IVA!';
        }
        return $iva;
    }
}


?>
    <b> Insira o salário </b>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method='post'>
        <table>
        <tr>
            <td>Salário</td>
            <td> <input type="text" name='salario' /> </td>
        </tr>
        <tr>
            <td></td>
            <td align='right'>
                <button type='submit' name='enviar'> Enviar </button>
            </td>
        </tr>
        </table>
    </form>

    <br /> <br />

    <b> Imposto Calculado </b>
    <table border=1>
        <thead>
            <th> Salário </th>
            <th> IVA </th>
        </thead>

        <?php 

        if(isset($_POST['enviar'])){
            $iva = calcularImposto($salario);
            echo '<tr>';
            echo "<td> $salario MT</td>";
            echo "<td> <label style='color: red;'> $iva </label> </td>";
            echo '</tr>';

        }

        ?>

    </table>
</body>
</html>