<?php

require_once ("DataSource.php");  
require_once (__DIR__."/../Entidad/Usuario.php");

class UsuarioDAO {
     
     
	 public function autenticarUsuario($correo, $password){
        
       
        $data_source = new DataSource();

        
        $data_table= $data_source->ejecutarConsulta("SELECT * FROM usuario WHERE correo =:correo AND password = :password",array(':correo'=>$correo,':password'=>$password));

        $usuario=null;
        
        if(count($data_table)==1){
            
           
            foreach($data_table as $indice => $valor){
                
                $usuario = new Usuario(
                        $data_table[$indice]["id"],
                        $data_table[$indice]["nombre"],
                        $data_table[$indice]["correo"],
                        $data_table[$indice]["password"],
                        $data_table[$indice]["telefono"],
                        $data_table[$indice]["fechanac"],
                        $data_table[$indice]["sexo"],
                        $data_table[$indice]["pesokg"],
                        $data_table[$indice]["administrador"]
                        );
            }
        }
       
        return $usuario;
    }    


    public function registrarUsuario(Usuario $usuario){
        $data_source = new DataSource();
        
        $stmt1 = "INSERT INTO usuario VALUES (NULL,:nombre,:correo,:password,:telefono,:fechanac,:sexo,:pesokg,:administrador)"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':nombre' => $usuario->getNombre(),
            ':correo' => $usuario->getCorreo(),
            ':password' => $usuario->getPassword(),
            ':telefono'=>$usuario->getTelefono(),
            ':fechanac'=>$usuario->getFechaNac(),
            ':sexo'=>$usuario->getSexo(),
            ':pesokg'=>$usuario->getPesoKg(),
            ':administrador'=>$usuario->getAdministrador()
            )
        ); 

      return $resultado;
    }

    public function verUsuarios(){
        $data_source = new DataSource();
        
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM usuario", NULL);

        $usuario=null;
        $usuarios=array();

        foreach($data_table as $indice => $valor){
            $usuario = new Usuario(
                    $data_table[$indice]["id"],
                    $data_table[$indice]["nombre"],
                    $data_table[$indice]["correo"], 
                    $data_table[$indice]["password"],
                    $data_table[$indice]["telefono"],
                    $data_table[$indice]["fechanac"],
                    $data_table[$indice]["sexo"],
                    $data_table[$indice]["pesokg"],
                    $data_table[$indice]["administrador"]
                    );
            array_push($usuarios,$usuario);
        }
        
    return $usuarios;
    }

    public function eliminarUsuario($idUsuario){
        $data_source = new DataSource();
        
        $stmt1 = "DELETE FROM usuario WHERE id = :idUsuario"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':idUsuario' => $idUsuario
            )
        ); 

      return $resultado;
    }

    public function verUsuarioPorId($idUsuario){
        $data_source = new DataSource();
        
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM usuario WHERE id = :idUsuario", array(':idUsuario'=>$idUsuario));

        $usuario=null;
        
        if(count($data_table)==1){
            $usuario = new Usuario(
                    $data_table[0]["id"],
                    $data_table[0]["nombre"],
                    $data_table[0]["correo"],
                    $data_table[0]["password"],
                    $data_table[0]["telefono"],
                    $data_table[0]["fechanac"],
                    $data_table[0]["sexo"],
                    $data_table[0]["pesokg"],
                    $data_table[0]["administrador"]
                    );
        }

        
    return $usuario;
    }

    public function editarUsuario($usuario){
        $data_source = new DataSource();
        
        $stmt1 = "UPDATE usuario SET nombre = :nombre, correo = :correo, password = :password, telefono = :telefono, fechanac = :fechanac, sexo = :sexo, pesokg = :peso, administrador = :administrador  WHERE id = :idUsuario"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':nombre' => $usuario->getNombre(),
            ':correo' => $usuario->getCorreo(),
            ':password' => $usuario->getPassword(),
            ':telefono' => $usuario->getTelefono(),
            ':fechanac' => $usuario->getFechaNac(),
            ':sexo' => $usuario->getSexo(),
            ':peso' => $usuario->getPesoKg(),
            ':administrador' => $usuario->esAdministrador(),
            ':idUsuario' => $usuario->getId()
            )
        ); 

      return $resultado;
    }

}



