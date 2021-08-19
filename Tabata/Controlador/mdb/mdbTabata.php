<?php

require_once(__DIR__."/../../Modelo/Dao/TabataDao.php");

function registrarTabata(Tabata $tabata){

    $dao = new TabataDao();

    $tabata = $dao->registrarTabata($tabata);

    return $tabata;
}

function verTabata(){
    $dao= new TabataDao();
    $tabata = $dao->verTabata();

    return $tabata;
}

function eliminarTabata($idTabata){
    $dao = new TabataDao();
    $dao->eliminarTabata($idTabata);
}

function verTabataIdUsuario($idUsuario){
    $dao= new TabataDao();
    $tabata= $dao->verTabataIdUsuario($idUsuario);
    return $tabata;
}
function editarTabata($tabata){
    $dao= new TabataDao();
    $dao->editarTabata($tabata);
}

function verTabataId($idTabata){
    $dao= new TabataDao();
    $tabata = $dao->verTabataId($idTabata);
    return $tabata;
}