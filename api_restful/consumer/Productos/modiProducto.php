<?php
$id=$_REQUEST['id'];
$nombre=$_REQUEST['nombre'];
$pu=$_REQUEST['pu'];
$cantidad=$_REQUEST['cantidad'];
$cat_id=$_REQUEST['cat_id'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
</head>
<body>
    <h1>Actualizar Producto</h1>
    <hr>
    <table border=1>
    <form action="actualizar.php" method="post">

    <tr hidden>
        <td hidden><label for="id" hidden>ID</label></td>
        <td><input type="text" name="id" value=<?php echo $id  ?> hidden required></td>
    </tr>
    <tr>
        <td><label for="nom">Nombre</label></td>
        <td><input type="text" name="nom" value=<?php echo $nombre  ?>  required></td>
    </tr>
    <tr>
        <td><label for="pu">Pu</label></td>
        <td><input type="text" name="pu" value=<?php echo $pu  ?> required></td>
    </tr>
    <tr>
        <td><label for="cantidad">Cantidad</label></td>
        <td><input type="text" name="cantidad" value=<?php echo $cantidad  ?> required></td>
    </tr>
    <tr>
        <td><label for="cat_id">cat_id</label></td>
        <td><input type="text" name="cat_id" value=<?php echo $cat_id  ?> required></td>
    </tr>
    <tr>
        <td><input type="submit" name="enviar" value="Enviar"></td>
        <td><input type="reset" name="borrar" value="Borrar"></td>
    </tr>
    </form>
    </table>
    <br>
    <br>
    <a href="administrarProductos.php">Regresar</a>
</body>
</html>