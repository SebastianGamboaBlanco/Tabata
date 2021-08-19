<?php
    session_start();
    

    require_once(__DIR__."/../mdb/mdbUsuario.php");

        $nombre= $_POST['nombre'];
        $correo=$_POST['correo'];
        $telefono=$_POST['telefono'];
        $fecha=new DateTime($_POST['fechanac']);
        $fechanac=$fecha->format('Y-m-d');
        $sexo=$_POST['sexo'];
        $pesokg=$_POST['pesokg'];
        $password=$_POST['password'];
        $administrador=0;
        
        $usuario = new Usuario(null,$nombre,$correo,$password,$telefono,$fechanac,$sexo,$pesokg,$administrador);
        $registrar= registrarUsuario($usuario);

        if ($registrar==0){
            header("Location: ../../Vista/login.php?msg=Error registro" );
        }else{
            header("Location: ../../Vista/login.php?msg=Registrado Correstamente" );
        }
