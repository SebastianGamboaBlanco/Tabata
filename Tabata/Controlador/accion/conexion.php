<?php
    function conexion(){
        $servidor="localhost";
        $usuario="root";
        $bd="tabatadb";
        $password="linux2021";
        $conexion=mysqli_connect($servidor,$usuario,$password,$bd);
        return $conexion;
    }
   