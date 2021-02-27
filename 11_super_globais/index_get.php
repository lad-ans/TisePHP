<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globais</title>
</head>

<body>

<?php
    // super globais
    // $_SERVER['PHP_SELF']: permite localizar o directório do documento 
    // echo $_SERVER['PHP_SELF'];

    // $_GET['var']

if(isset($_GET['submeter'])){

    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $email = $_GET['email'];

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