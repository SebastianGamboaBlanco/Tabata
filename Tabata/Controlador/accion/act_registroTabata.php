<?php
    session_start();

    require_once(__DIR__."/../mdb/mdbTabata.php");

        $nombre= $_POST['nombre'];
        $tPreparacion=$_POST['tPreparacion'];
        $tActividad=$_POST['tActividad'];
        $tDescanso=$_POST['tDescanso'];
        $numSeries=$_POST['numSeries'];
        $numRondas=$_POST['numRondas'];
        $idUsuario=$_SESSION['ID_USUARIO'];

        $tabata = new Tabata(null,$nombre,$tPreparacion,$tActividad,$tDescanso,$numSeries,$numRondas,$idUsuario);
        $registrar = registrarTabata($tabata);

        if($registrar){
            header("Location: ../../Vista/tabata.php");
        }else{
            echo "<script> alert('error registro'); window.history.go(-1);</script>";
        }
        