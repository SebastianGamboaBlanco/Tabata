<?php

class DataSource {

    private $cadenaConexion;
    private $conexion;

    public function __construct(){

        try{
            
            $this->cadenaConexion="mysql:host=localhost;dbname=tabatadb;charset=utf8";

            
            $this->conexion = new PDO($this->cadenaConexion,"root","linux2021");

        } catch (PDOException $ex) {

             echo 'Fallo de Conexion: '. $ex->getMessage();

        }

    }
    
    public function ejecutarConsulta($sql="", $values=array()){

        if($sql != ""){

            
            $consulta=$this->conexion->prepare($sql);

            
            $consulta->execute($values);

           
            $tabla_datos = $consulta->fetchAll(PDO::FETCH_ASSOC);

            
            $this->conexion=null;

            return $tabla_datos;

        }else{
            
            return 0;

        }

    }

    //Con este metodo se puede actualizar y eliminar datos de la base de datos
    public function ejecutarActualizacion($sql="", $values=array()){

        if($sql != ""){

            //Se envia la consulta por el argumento de prepare($sql)
            $consulta=$this->conexion->prepare($sql);

            //Se ejecuta la consulta
            $consulta->execute($values);

            //Se devuelve el número de filas afectadas, ya sea que se hayan actualizado
            //o eliminado datos en la base de datos
            $numero_filas_afectadas = $consulta->rowCount();

            return $this->conexion->lastInsertId();
            $this->conexion=null;

        }else{
            return 0;
        }
    }
}
