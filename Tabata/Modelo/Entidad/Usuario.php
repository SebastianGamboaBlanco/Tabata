<?php

class Usuario
{
    public $id;
    public $nombre;
    public $correo;
    public $password;
    public $telefono;
    public $fechanac;
    public $sexo;
    public $pesokg;
    public $administrador;
    
    public function __construct($id, $nombre, $correo, $password, $telefono, $fechanac, $sexo, $pesokg, $administrador){

        $this->id = $id;
        $this->nombre = $nombre;
		$this->correo = $correo;
		$this->password = $password;
        $this->telefono = $telefono;
        $this->fechanac = $fechanac;
		$this->sexo = $sexo;
        $this->pesokg = $pesokg;
        $this->administrador = $administrador;
    }
    
    public function getId(){
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getCorreo()
    {
        return $this->correo;
    }
    
     public function getPassword()
    {
        return $this->password;
    }

	 public function getTelefono()
    {
        return $this->telefono;
    }

    public function getFechaNac()
    {
        return $this->fechanac;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function getPesoKg(){
        return $this->pesokg;
    }

    public function getAdministrador(){
        return $this->administrador;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function setFechaNac($fechanac)
    {
        $this->fechanac = $fechanac;

        return $this;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function setPesoKg($pesokg)
    {
        $this->pesokg = $pesokg;

        return $this;
    }

    public function setAdministrador($administrador)
    {
        $this->administrador = $administrador;

        return $this;
    }

}