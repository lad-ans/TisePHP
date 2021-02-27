<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentário com POO</title>
</head>

<body>
<?php
class Comentario {
    public String $comentario;

    public function comentar($coment){
        return $this->comentario = $coment;
    }

    public function buscarDataAtual(){
        return date('d/m/Y h:i:s a', time());
    }
}
// instanciação: criação do objecto
$objectoComentario = new Comentario();

if(isset($_POST['enviar'])){
    $objectoComentario->comentar($_POST['comentario']);
}
?>

    <form action="01.1_comentario.php" method="post">
        <table>
            <tr>
                <textarea name="comentario" cols="25" rows="6"></textarea> <br />
            </tr>
            <tr align='right'>
                <button type="submit" name="enviar"> publicar comentário </button>
            </tr>
        </table>
    </form>

    <br /> <br />
    <label > <?php if(isset($_POST['enviar'])){ echo $objectoComentario->comentario;} ?> </label>
    <br />
    <small> <i style='font-size: 8px;'> <?php if(isset($_POST['enviar'])) echo $objectoComentario->buscarDataAtual() ?> </i></small>

</body>

</html>