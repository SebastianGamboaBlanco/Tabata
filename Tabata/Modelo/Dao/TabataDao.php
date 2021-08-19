<?php

require_once ("DataSource.php");
require_once (__DIR__."/../Entidad/Tabata.php");

class TabataDao{

    public function registrarTabata(Tabata $tabata){
        $data_source = new DataSource();
        $stmt1="INSERT INTO tabata VALUES (Null,:nombre,:tPreparacion,:tActividad,:tDescanso,:numSeries,:numRondas,:idUsuario)";
        $resultado= $data_source->ejecutarActualizacion($stmt1,array(
            ':nombre' => $tabata->getNombre(),
            ':tPreparacion' => $tabata->getTpreparacion(),
            ':tActividad' => $tabata->getTactividad(),
            ':tDescanso' => $tabata->getTdescanso(),
            ':numSeries' => $tabata->getNumSeries(),
            ':numRondas'=> $tabata ->getNumRondas(),
            ':idUsuario' => $tabata -> getIdUsuario()
        ));
        return $resultado;
    }

    public function verTabata(){
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM tabata", NULL);
        $tabata=null;
        $tabatas=array();

        foreach($data_table as $indice => $valor){
            $tabata = new Tabata(
                $data_table[$indice]["id"],
                $data_table[$indice]["nombre"],
                $data_table[$indice]["tPreparacion"],
                $data_table[$indice]["tActividad"],
                $data_table[$indice]["tDescanso"],
                $data_table[$indice]["numSeries"],
                $data_table[$indice]["numRondas"],
                $data_table[$indice]["idUsuario"]

            );
            array_push($tabatas,$tabata);
        }
        return $tabatas;
    }

    public function eliminarTabata($idTabata){
        $data_source = new DataSource();

        $stmt1= "DELETE FROM tabata WHERE id = :idTabata";
        $resultado = $data_source->ejecutarActualizacion($stmt1,array(
            ':idTabata' => $idTabata
        ));
        return $resultado;
    }

    public function verTabataIdUsuario($idUsuario){
        $data_source = new DataSource();

        $data_table = $data_source ->ejecutarConsulta("SELECT * FROM tabata WHERE idUsuario = $idUsuario", Null);

        $tabata=null;
        $tabatas=array();
        foreach($data_table as $indice => $valor){
            $tabata = new Tabata(
                $data_table[$indice]["id"],
                $data_table[$indice]["nombre"],
                $data_table[$indice]["tPreparacion"],
                $data_table[$indice]["tActividad"],
                $data_table[$indice]["tDescanso"],
                $data_table[$indice]["numSeries"],
                $data_table[$indice]["numRondas"],
                $data_table[$indice]["idUsuario"]

            );
            array_push($tabatas,$tabata);
        }
        return $tabatas;
    }

    public function verTabataId($idTabata){
        $data_source = new DataSource();

        $data_table = $data_source ->ejecutarConsulta("SELECT * FROM tabata WHERE id = $idTabata", Null);

        $tabata=null;
        $tabatas=array();
        foreach($data_table as $indice => $valor){
            $tabata = new Tabata(
                $data_table[$indice]["id"],
                $data_table[$indice]["nombre"],
                $data_table[$indice]["tPreparacion"],
                $data_table[$indice]["tActividad"],
                $data_table[$indice]["tDescanso"],
                $data_table[$indice]["numSeries"],
                $data_table[$indice]["numRondas"],
                $data_table[$indice]["idUsuario"]

            );
            array_push($tabatas,$tabata);
        }
        return $tabatas;
    }

    public function editarTabata($tabata){
        $data_source = new DataSource();

        $stmt1 = "UPDATE tabata SET nombre = :nombre, tPreparacion = :tPreparacion, 
        tActividad = :tActividad, tDescanso = :tDescanso, numSeries = :numSeries, 
        numRondas = :numRondas Where id = :id";
        
        $resultado= $data_source->ejecutarActualizacion($stmt1,array(
            ':id' => $tabata -> getId(),
            ':nombre' => $tabata->getNombre(),
            ':tPreparacion' => $tabata->getTpreparacion(),
            ':tActividad' => $tabata->getTactividad(),
            ':tDescanso' => $tabata->getTdescanso(),
            ':numSeries' => $tabata->getNumSeries(),
            ':numRondas'=> $tabata ->getNumRondas(),
            ':idUsuario' => $tabata -> getIdUsuario()
            
        ));
        return $resultado;
    }
}