<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globais</title>
</head>
<body>

<?php
/// super globais

// $_SERVER['PHP_SELF']: permite localizar o directório do documento 
// echo $_SERVER['PHP_SELF'];

if(isset($_POST['submeter'])){
    $erros = [];

    // validação e sanitação / limpeza

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    
    $idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);

    if(!filter_var($idade, FILTER_SANITIZE_NUMBER_INT)){
        $erroIdade = 'Idade precisa ser um inteiro';
    } else {
        $idade = $_POST['idade'];
    }



    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if(!filter_var($email, FILTER_SANITIZE_EMAIL)){
        $erroEmail = "Email precisa ser do tipo 'exemplo@dominio.com'";
    } else {
        $email = $_POST['email'];
    }


}

?>

<b> Introduza os Dados </b>

<?php 
// verificando se existem mensagens de erro no array $erros

//    if(!empty($erros)){
//         foreach( $erros as $erro ){
//             echo "<li style='color:red'> $erro </li>";
//         }
//     }

?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method='post'>
<table>
            <tr>
                <td> Introduza o nome </td>
                <td> <input type='text' placeholder='Nome...' name='nome' /> </td>
            </tr>
            <tr>
                <td> Introduza a idade </td>
                <td> <input type='text' placeholder='Idade...' name='idade' /> </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <?php
                    if(!empty($erroIdade)){
                        echo "<li style='color:red; font-size: 10px;'> $erroIdade </li>";
                    }
                ?>
                </td>
            </tr>

            <tr>
                <td> Introduza o email </td>
                <td> <input type='text' placeholder='Email...' name='email' /> </td>

            </tr>
            <tr>
                <td></td>
                <td>
                    <?php
                    if(!empty($erroEmail)){
                        echo "<li style='color:red; font-size: 10px;'> $erroEmail </li>";
                    }
                ?>
                </td>
            </tr>

            <tr>
                <td></td>
                <td align='left'> <button type='submit' name='submeter' /> Submeter </button> </td>
            </tr>
        </table>
</form>

<br />
<!-- <a type='submit' href='index.php?nome=Ladino+Anselmo+Arnaldo&idade=34&email=above%40co.mz&submeter='>ENVIAR PELO GET </a> -->
<br />
<b> Dados Recebidos </b>

       
       <table border=1>
           <thead>
       <th>
           <label> Nome </label>
       </th>
       <th>
           <label> Idade </label>
       </th>
       <th>
           <label> Email </label>
       </th>
           </thead>
           <tr>
            <td> <?php if(isset($_POST['submeter'])){ echo $nome; } ?> </td>
            <td> <?php if(isset($_POST['submeter'])){ echo $idade; } ?> </td>
            <td> <?php if(isset($_POST['submeter'])){ echo $email; } ?> </td>
           </tr>
       </table>
</body>
</html>