<?php

class Empleado extends Persona{

    private $idEmpleado;
    private $rol;
    private $password;

    public function __construct(){

        parent::__construct();
    }


    public function getIdEmpleado(){
        
        return $this->idEmpleado;
    }

    public function setIdEmpleado($idEmpleado){
        
        $this->idEmpleado = $idEmpleado;
    }


    public function getRol(){

        return $this->rol;
    }

    public function setRol($rol){
        
        $this->rol = $rol;
    }


    public function getPassword(){

        return $this->password;
    }

    public function setPassword($password){

        $this->password = $password;
    }
}

?>