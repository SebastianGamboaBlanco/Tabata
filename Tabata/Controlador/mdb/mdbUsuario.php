<?php

require_once(__DIR__."/../../Modelo/Dao/UsuarioDAO.php");
        
function autenticarUsuario($correo, $password){
        
        $dao=new UsuarioDAO();
        
        
        $usuario = $dao->autenticarUsuario($correo, $password);

        
        return $usuario;
    }

function registrarUsuario(Usuario $usuario){
    
    $dao=new UsuarioDAO();

    $usuario = $dao->registrarUsuario($usuario);

    return $usuario;
}

function verUsuarios(){
    $dao=new UsuarioDAO();

    $usuarios = $dao->verUsuarios();

    return $usuarios;
} 

function eliminarUsuario($idUsuario){
    $dao=new UsuarioDAO();
    $dao->eliminarUsuario($idUsuario);
}

function verUsuarioPorId($idUsuario){
    $dao=new UsuarioDAO();
    $usuario = $dao->verUsuarioPorId($idUsuario);
    return $usuario;
}

function editarUsuario($usuario){
    $dao=new UsuarioDAO();
    $dao->editarUsuario($usuario);
}
