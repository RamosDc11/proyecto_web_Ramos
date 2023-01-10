<?php
$cat_id=$_REQUEST['cat_id'];
$cat_nom=$_REQUEST['cat_nom'];
$cat_obs=$_REQUEST['cat_obs'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Categoria</title>
</head>
<body>
    <h1>Actualizar Categoria</h1>
    <hr>
    <table border=1>
    <form action="actualizar.php" method="post">

    <tr hidden>
        <td hidden><label for="cat_id" hidden>ID</label></td>
        <td><input type="text" name="cat_id" value=<?php echo $cat_id  ?> hidden required></td>
    </tr>
    <tr>
        <td><label for="cat_nom">Nombre</label></td>
        <td><input type="text" name="cat_nom" value=<?php echo $cat_nom  ?> required></td>
    </tr>
    <tr>
        <td><label for="cat_obs">Observaciones</label></td>
        <td><input type="text" name="cat_obs" value=<?php echo $cat_obs  ?> required></td>
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