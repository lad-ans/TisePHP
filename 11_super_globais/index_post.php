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

// $_POST['var']
if(isset($_POST['submeter'])){

    $nome = $_POST['nome'];

    $idade = $_POST['idade'];

    $email = $_POST['email'];
}
?>

    <b> Introduza os Dados </b>
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
                <td> Introduza o email </td>
                <td> <input type='text' placeholder='Email...' name='email' /> </td>
            </tr>

            <tr>
                <td></td>
                <td align='right'> <button type='submit' name='submeter' /> Submeter </button> </td>
            </tr>
        </table>
    </form>

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