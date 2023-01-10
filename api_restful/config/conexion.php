<?php
    //Archivo de conexion a la base de datos 
    class Conectar
    {
        protected $dbh;

        protected function Conexion(){
            try
            {
                $conectar=$this->dbh=new PDO("mysql:local=localhost; dbname=api_restful","root","");
                return $conectar;
            }
            catch(Exception $e)
            {
                print "Error en la BD".$e->getMessage()."</br>";
                die("Verifica por favor...");
            }
        }
    }

?>