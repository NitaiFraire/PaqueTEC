<?php

class Empleado extends Persona{

    private $idEmpleado;

    public function __construct(){

        parent::__construct();
    }


    public function getIdEmpleado(){
        
        return $this->idEmpleado;
    }

    public function setIdEmpleado($idEmpleado){
        
        $this->idEmpleado = $idEmpleado;
    }
}

?>