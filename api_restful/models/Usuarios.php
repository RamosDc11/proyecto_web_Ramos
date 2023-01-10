<?php
  
  class Usuarios extends Conectar{

       public function getUsuarios_sesion($user,$pwd)
       {
        $conectar=parent::Conexion();
          
        $sql="select * from usuarios where user=? and pwd=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$user);
        $sql->bindValue(2,$pwd);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
  }

}


?>