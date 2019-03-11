<?php

class Estado{
    
    // Foreign keys
    private $idPais;

    private $idEstado;
    private $nombreEstado;
    
    private $db;

    public function __construct(){
        
        $this->db = DataBase::connect();
    }


    public function getIdPais(){

        return $this->idPais;
    }

    public function setIdPais($idPais){

        $this->idPais = $idPais;
    }


    public function getIdEstado(){

        return $this->idEstado;
    }

    public function setIdEstado($idEstado){

        $this->idEstado = $idEstado;
    }


    public function getNombreEstado(){

        return $this->nombreEstado;
    }

    public function setNombreEstado($nombreEstado){

        $this->nombreEstado = $nombreEstado;
    }

}


?>