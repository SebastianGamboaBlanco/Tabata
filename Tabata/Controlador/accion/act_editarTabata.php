<?php
    session_start();

    require_once("conexion.php");
        $conexion=conexion();
        $id=$_POST['id'];
        $nombre= $_POST['nombre'];
        $tPreparacion=$_POST['tPreparacion'];
        $tActividad=$_POST['tActividad'];
        $tDescanso=$_POST['tDescanso'];
        $numSeries=$_POST['numSeries'];
        $numRondas=$_POST['numRondas'];
        $idUsuario=$_SESSION['ID_USUARIO'];

        $sql="UPDATE tabata SET nombre = '$nombre', tPreparacion = '$tPreparacion', 
        tActividad = '$tActividad', tDescanso = '$tDescanso', numSeries = '$numSeries', 
        numRondas = '$numRondas' Where id = '$id'";

        $resultado=mysqli_query($conexion,$sql);

        if($resultado){
            header("Location: ../../Vista/tabata.php");
        }
