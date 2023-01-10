<?php
include_once('../../config/conexion.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Categoria</title>
</head>
<body>
    <h1>Nueva Categoria</h1>
    <hr>
    <table border=1>
    <form action="insertar.php" method="post">
    <tr>
        <td><label for="cat_nom">Nombre</label></td>
        <td><input type="text" name="cat_nom" placeholder="Nombre de categoria" required></td>
    </tr>
    <tr>
        <td><label for="cat_obs">Observaciones</label></td>
        <td><input type="text" name="cat_obs" placeholder="Observaciones de categoria" required></td>
    </tr>
    <tr>
        <td><input type="submit" name="enviar" value="Enviar"></td>
        <td><input type="reset" name="borrar" value="Borrar"></td>
    </tr>
    </form>
    </table>
    <br>
    <br>
    <a href="administrarCategoria.php">Regresar</a>
</body>
</html>




