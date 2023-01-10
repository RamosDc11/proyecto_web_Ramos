<?php
include_once('../../config/conexion.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Producto</title>
</head>
<body>
    <h1>Nuevo Producto</h1>
    <hr>
    <table border=1>
    <form action="insertar.php" method="post">
    <tr>
        <td><label for="nom">Nombre</label></td>
        <td><input type="text" name="nom" placeholder="Nombre de producto" required></td>
    </tr>
    <tr>
        <td><label for="pu">Pu</label></td>
        <td><input type="text" name="pu" placeholder="Precio por unidad" required></td>
    </tr>
    <tr>
        <td><label for="cantidad">Cantidad</label></td>
        <td><input type="text" name="cantidad" placeholder="Cantidad" required></td>
    </tr>
    <tr>
        <td><label for="cat_id">cat_id</label></td>
        <td><input type="text" name="cat_id" placeholder="Categoria" required></td>
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