<?php
//Clase que se utilizara para crear el modelo que interactua con la base de datos

class Categoria extends Conectar 
{
    //funcion para traer todas las categorias 
    public function getCategoria()
    {
        //llamar la cadena de conexion de la BD
        $conectar=parent::conexion();

        //String a ejecutar
        $sql= "select * from categoria where est=1";

        //Se prepara la conexion
        $sql=$conectar->prepare($sql);

        //Ejecutar la conexion
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
    //funcion para traer un registro en particular
    public function getCategoria_id($cat_id)
    {
        $conectar=parent::conexion();

        $sql= "select * from categoria where est=1 and cat_id=?";

       
        $sql=$conectar->prepare($sql);

       // para indicar en el string el parametro que utilizara 
       $sql->bindValue(1,$cat_id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }

    //Insertar registros
    public function postCategoria($cat_nom, $cat_obs)
    {
        $conectar=parent::conexion();

       
        $sql= "insert into categoria values (null, ?, ?, 1)";

       
        $sql=$conectar->prepare($sql);

       // para indicar en el string el parametro que utilizara 
       $sql->bindValue(1,$cat_nom);
       $sql->bindValue(2,$cat_obs);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }

    //Modificar registros
    public function putCategoria($cat_nom, $cat_obs, $cat_id)
    {
        $conectar=parent::conexion();

        $sql= "update categoria set cat_nom=?, cat_obs=? where cat_id=?";

       
        $sql=$conectar->prepare($sql);

       // para indicar en el string el parametro que utilizara 
       $sql->bindValue(1,$cat_nom);
       $sql->bindValue(2,$cat_obs);
       $sql->bindValue(3,$cat_id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }

    //Eliminar registros
    public function deleteCategoria($cat_id)
    {
        $conectar=parent::conexion();

    $sql= "delete from categoria where cat_id=?";

   
    $sql=$conectar->prepare($sql);

   // para indicar en el string el parametro que utilizara 
   $sql->bindValue(1,$cat_id);
    $sql->execute();

    return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }


}

?>