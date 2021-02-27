<?php
require_once '../controllers/cliente_controller.php';
$clienteController = new ClienteController();

$clientesArray = $clienteController->listarClientes();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista Clientes</title>
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
                <label class="" style="font-weight: 600; font-size: 24pt; color: #fff;"> Lista de Clientes </label>
            </a>
        </div>
    </nav>

    <div class="row justify-content-end mt-2 mr-2">
        <a href="index.php" class="btn btn-primary mr-1"> Cadastrar Clientes </a>
    </div>

    <div class="container d-block">
        <div class="container d-block">
            <div class="row justify-content-center">
                <div class="col-8 mt-5">
                    <table class="table table-primary">
                        <?php
                        // imprimindo a mensagem de sucesso
                            if(isset($_GET['mensagem'])){
                                echo $_GET['mensagem'];
                            }
                        // apagando cliente
                        if(isset($_GET['idApagar'])){
                            if($clienteController->apagarCliente($_GET['idApagar'])){
                                header('location: listar_clientes.php');
                                echo 'Cliente Apagado com sucesso!';
                            }
                        }
                        
                        ?>
                        <thead class="thead-primary">
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Contacto</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Acções</th>
                            </tr>
                            
                            <?php
                                if(!empty($clientesArray)){
                                    for($i=0; $i < count($clientesArray); $i++){
    
                                        echo '<tr>';
                                            foreach($clientesArray[$i] as $chave => $valor){
                                                if($chave != 'id'){
                                                    echo '<td>';
                                                    echo $valor;
                                                    echo '</td>';
                                                }
                                            }
                                            echo '<td>';
                                            // id cliente atual
                                            $idClienteAtual = $clientesArray[$i]['id'];
                                            echo "<a href='index.php?id=$idClienteAtual'}><i class='fa fa-edit text-info mr-3' data-toggle='tooltip' title='Editar'>Editar</i></a>";
                                            echo "<a href='listar_clientes.php?idApagar=$idClienteAtual'><i class='fa fa-trash text-danger' data-toggle='tooltip' title='Apagar'>Apagar</i></a>";
    
                                            echo '</td>';
    
                                        echo '</tr>';
                                    }
                                } else {
                                    echo 'O banco de dados está vazio :(';
                                }

                            ?>

                        </thead>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>