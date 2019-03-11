<?php

class Devolucion{

    // Foreign keys
    private $idPaquete;

    private $idDevolucion;
    private $fechaDevolucion;
    private $motivoDevolucion;

    private $db;

    
    public function __construct(){
        
        $this->db = DataBase::connect();
    }

    
    public function getIdPaquete(){

        return $this->idPaquete;
    }

    public function setIdPaquete($idPaquete){

        $this->idPaquete = $idPaquete;
    }


    public function getIdDevolucion(){

        return $this->idDevolucion;
    }
 
    public function setIdDevolucion($idDevolucion){

        $this->idDevolucion = $idDevolucion;
    }

 
    public function getFechaDevolucion(){

        return $this->fechaDevolucion;
    }

    public function setFechaDevolucion($fechaDevolucion){

        $this->fechaDevolucion = $fechaDevolucion;
    }


    public function getMotivoDevolucion(){

        return $this->motivoDevolucion;
    }

    public function setMotivoDevolucion($motivoDevolucion){

        $this->motivoDevolucion = $motivoDevolucion;
    }
}

?>