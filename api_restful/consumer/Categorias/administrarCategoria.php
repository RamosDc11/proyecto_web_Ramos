<?php
//Crear la vista para mostrar en pantalla todos los registros de la tabla categoria

//consumir el API_Restful

$endpoint="http://127.0.0.1/SOA/parcial2/api_restful/controllers/categoria.php?op=selectall";

//Convertir el JSON en un objeto de tipo array assoc
$datos=json_decode(file_get_contents($endpoint),true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar categorias</title>
</head>
<body>
<br>
<center>
<td><a href='nuevoCategoria.php'>Insertar Categoria</a></td>
<h1>Registros de Categorias</h1>
<hr>

<table border=1>
<tr>
<th>No.</th>
<th>Nombre</th>
<th>Observaciones</th>
<th>Status</th>
<th>Acciones</th>
</tr>


<?php
for ($i=0; $i<count($datos); $i++)
{

    ?>

<tr>
<td><?php echo $datos[$i]["cat_id"] ?></td>
<td><?php echo $datos[$i]["cat_nom"] ?></td>
<td><?php echo $datos[$i]["cat_obs"] ?></td>
<td><?php echo $datos[$i]["est"] ?></td>
<td><a href="modiCategoria.php?cat_id=<?php echo $datos[$i]['cat_id'] ?>&cat_nom=<?php echo $datos[$i]['cat_nom'] ?>&cat_obs=<?php echo $datos[$i]['cat_obs'] ?>">Actualizar</a><a href="eliminar.php?cat_id=<?php echo $datos[$i]['cat_id'] ?>">Eliminar</a></td>
</tr>

<?php
}
?>


</table>
<hr>
</center>
<br>
<td><a href='../index.php'>Regresar</a></td>


</body>
</html>

