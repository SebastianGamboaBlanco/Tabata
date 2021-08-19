<?php
    session_start();
    require_once(__DIR__."/../mdb/mdbTabata.php");
    $resultado=eliminarTabata($_GET['id']);
    if($resultado==0){
        header("Location: ../../Vista/tabata.php");
    }