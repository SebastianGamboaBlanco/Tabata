<?php

class Tabata{

    public $id;
    public $nombre;
    public $tPreparacion;
    public $tActividad;
    public $tDescanso;
    public $numSeries;
    public $numRondas;
    public $idUsuario;

    public function __construct($id,$nombre,$tPreparacion,$tActividad,$tDescanso,$numSeries,$numRondas,$idUsuario){

        $this->id=$id;
        $this->nombre=$nombre;
        $this->tPreparacion=$tPreparacion;
        $this->tActividad=$tActividad;
        $this->tDescanso=$tDescanso;
        $this->numSeries=$numSeries;
        $this->numRondas=$numRondas;
        $this->idUsuario=$idUsuario;    
    }
    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getTpreparacion(){
        return $this->tPreparacion;
    }
    public function getTactividad(){
        return $this->tActividad;
    }
    public function getTdescanso(){
        return $this->tDescanso;
    }
    public function getNumSeries(){
        return $this->numSeries;
    }
    public function getNumRondas(){
        return $this->numRondas;
    }
    public function getIdUsuario(){
        return $this->idUsuario;
    }
    public function setId($id){
        $this->id=$id;
        return $this;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
        return $this;
    }
    public function setTpreparacion($tPreparacion){
        $this->tPreparacion=$tPreparacion;
        return $this;
    }
    public function setTactividad($tActividad){
        $this->tActividad=$tActividad;
        return $this;
    }
    public function setTdescanso($tDescanso){
        $this->tDescanso=$tDescanso;
        return $this;
    }
    public function setNumSeries($numSeries){
        $this->numSeries=$numSeries;
        return $this;
    }
    public function setNumRondas($numRondas){
        $this->numRondas=$numRondas;
        return $this;
    }
    public function setIdUsuario($idUsuario){
        $this->idUsuario=$idUsuario;
        return $this;
    }
}