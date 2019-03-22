<?php

class Pais{
    
    private $idPais;
    private $nombrePais;

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


    public function getNombrePais(){
       
        return $this->nombrePais;
    }

    public function setNombrePais($nombrePais){

        $this->nombrePais = $nombrePais;
    }

}
