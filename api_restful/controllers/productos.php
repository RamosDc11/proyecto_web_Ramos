<?php

    //Define al php que vamos a utilizar objetos JSON
    header('Content-Type: application/json');
    //Es el archivo del controlador que utilizara para 
    //acceder al modelo a traves de un endpoint y traer los datos en JSON
    require_once("../config/conexion.php");
    require_once("../models/Productos.php");

    //Crear un objeto para utilizar la categoria del models
    $productos= new Productos();

    //decodifique los parametros que enviamos y los acepte en tipo JSON
    $body=json_decode(file_get_contents("php://input"),true);

    //Crear los servicios a utilizar en los endpoint

    switch($_GET["op"])
    {
        //Case para traer todos los refistros de la tabla categorias
        case "selectall":$datos=$productos->getProductos();
                            echo json_encode($datos);
                            break;

        //Case para obtener un registro en particular
        case "selectid":$datos=$productos->getProductos_id($body["id"]);
                            echo json_encode($datos);
                            break;
                      
        //Case para insertar un registro en particular
        case "insert":$datos=$productos->postProductos($body["nom"],$body["pu"],$body["cantidad"],$body["cat_id"]);
                            echo json_encode("Registro con exito");
                            break;

        //Case para modificar un registro en particular
        case "update":$datos=$productos->putProductos($body["nom"],$body["pu"],$body["cantidad"],$body["cat_id"],$body["id"]);
                            echo json_encode("Registro actualizado");
                            break;

        //Case para eliminar un registro en particular
        case "delete":$datos=$productos->deleteProductos($body["id"]);
                            echo json_encode("Registro eliminado");
                            break;
    }


?>