<?php
    
    session_start();

    
    require_once (__DIR__."/../mdb/mdbUsuario.php");
        
       
        $correo = $_POST['correo'];
        $password = $_POST['password'];

        
        $user = autenticarUsuario($correo, $password);
        
        if($user != null){
            
            $_SESSION['ID_USUARIO'] = $user->getId();
            $_SESSION['NOMBRE_USUARIO'] = $user->getNombre();
            
            if($user->getAdministrador() == 1){
                header("Location: ../../vista/administradorUsuarios.php");                
            }else{
                header("Location: ../../Vista/tabata.php");
            }

        }else{
           header("Location: ../../Vista/login.php?msg=Informacion incorrecta" );
        }



