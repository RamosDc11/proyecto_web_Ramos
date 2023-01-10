<?php

    //Define al php que vamos a utilizar objetos JSON
    header('Content-Type: application/json');
    //Es el archivo del controlador que utilizara para 
    //acceder al modelo a traves de un endpoint y traer los datos en JSON
    require_once("../config/conexion.php");
    require_once("../models/Categoria.php");

    //Crear un objeto para utilizar la categoria del models
    $categoria= new Categoria();

    //decodifique los parametros que enviamos y los acepte en tipo JSON
    $body=json_decode(file_get_contents("php://input"),true);

    //Crear los servicios a utilizar en los endpoint

    switch($_GET["op"])
    {
        //Case para traer todos los registros de la tabla categorias
        case "selectall":$datos=$categoria->getCategoria();
                            echo json_encode($datos);
                            break;

        //Case para obtener un registro en particular
        case "selectid":$datos=$categoria->getCategoria_id($body["cat_id"]);
                            echo json_encode($datos);
                            break;

        //Case para insertar un registro en particular
        case "insert":$datos=$categoria->postCategoria($body["cat_nom"],$body["cat_obs"]);
                            echo json_encode("Registro con exito");
                            break;
                        
        //Case para modificar un registro en particular
        case "update":$datos=$categoria->putCategoria($body["cat_nom"],$body["cat_obs"],$body["cat_id"]);
                            echo json_encode("Registro actualizado");
                            break;

        //Case para eliminar un registro en particular
        case "delete":$datos=$categoria->deleteCategoria($body["cat_id"]);
                            echo json_encode("Registro eliminado");
                            break;

    }


?>