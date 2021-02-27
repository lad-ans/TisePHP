<?php
require_once '../controllers/cliente_controller.php';
$clienteController = new ClienteController();

if(isset($_GET['id'])){
   $cliente = $clienteController->popularCliente($_GET['id']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes CRUD</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/lib/animate.css">

    <script src="https://use.fontawesome.com/01766ae085.js"></script>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <label class="" style="font-weight: 600; font-size: 24pt; color: #fff;"> Cadastro de Clientes </label>
            </a>
        </div>
    </nav>
    <div class="row justify-content-end mt-2 mr-2">
      <a href="listar_clientes.php" class="btn btn-primary mr-1"> Listar Clientes </a>
    </div>
    <div class="container d-block">

        <div class="row justify-content-center">
            <div class="col-6">
                <i class="fa fa-company fa-4x text-primary"></i>
                    <h3 class="text-primary mb-4">
                    Faça o cadastro
                    </h3>
                    <?php
                        if(isset($_POST['enviar'])){
                            if(isset($_GET['id'])){
                                $clienteController->executar($_GET['id'], $_POST['nome'], $_POST['contacto'], $_POST['valor']);
                            } else {
                                $clienteController->executar('', $_POST['nome'], '+258'.$_POST['contacto'], $_POST['valor'] == null ? $_POST['valor'] = 0 : $_POST['valor']);
                            }
                        }
                    ?>
                    <form method="post">
                        <div>
                            <label class=""> Nome: </label>
                            <input type="text" value="<?php if(isset($cliente)) { echo $cliente['nome']; }  ?>" name="nome"
                                class="form-control" placeholder="">
                        </div>
                        <div>
                            <label class=""> Contacto: </label>
                            <input type="text" value="<?php if(isset($cliente)) { echo $cliente['contacto']; }  ?>" name="contacto"
                                class="form-control" placeholder="">
                        </div>
                        <div>
                            <label class=""> Valor: </label>
                            <input type="text" value="<?php if(isset($cliente)) { echo $cliente['valor']; }  ?>" name="valor"
                                class="form-control" placeholder="">
                        </div>
                        <div class="mt-4">
                            <input type="submit" name="enviar" class="form-control btn btn-primary" value="<?php if(isset($_GET['id'])) { echo 'Atualizar'; } else { echo 'Cadastrar';}  ?>">
                        </div>
                    </form>
            </div>
            </div>
        </div>
    </div>


</body>

</html>