<?php
//Clase que se utilizara para crear el modelo que interactua con la base de datos

class Productos extends Conectar 
{
    //funcion para traer todas las categorias 
    public function getProductos()
    {
        //llamar la cadena de conexion de la BD
        $conectar=parent::conexion();

        //String a ejecutar
        $sql= "select * from productos";

        //Se prepara la conexion
        $sql=$conectar->prepare($sql);

        //Ejecutar la conexion
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
    //funcion para traer un registro en particular
    public function getProductos_id($id)
    {
    
        $conectar=parent::conexion();

       
        $sql= "select * from productos where id=?";

       
        $sql=$conectar->prepare($sql);

       // para indicar en el string el parametro que utilizara 
       $sql->bindValue(1,$id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }

    //Insertar registros
    public function postProductos($nom, $pu, $cantidad, $cat_id)
    {
    
        $conectar=parent::conexion();

       
        $sql= "insert into productos values (null, ?, ?, ?, ?)";

       
        $sql=$conectar->prepare($sql);

       // para indicar en el string el parametro que utilizara 
       $sql->bindValue(1,$nom);
       $sql->bindValue(2,$pu);
       $sql->bindValue(3,$cantidad);
       $sql->bindValue(4,$cat_id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }

    //Modificar registros
    public function putProductos($nom, $pu, $cantidad, $cat_id, $id)
    {
    
        $conectar=parent::conexion();

       
        $sql= "update productos set nombre=?, pu=?, cantidad=?, cat_id=? where id=?";

       
        $sql=$conectar->prepare($sql);

       // para indicar en el string el parametro que utilizara 
       $sql->bindValue(1,$nom);
       $sql->bindValue(2,$pu);
       $sql->bindValue(3,$cantidad);
       $sql->bindValue(4,$cat_id);
       $sql->bindValue(5,$id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
    //Eliminar registros
    public function deleteProductos($id)
    {
        $conectar=parent::conexion();

       
    $sql= "delete from productos where id=?";

   
    $sql=$conectar->prepare($sql);

   // para indicar en el string el parametro que utilizara 
   $sql->bindValue(1,$id);
    $sql->execute();

    return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }


}

?>