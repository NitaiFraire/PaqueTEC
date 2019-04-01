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


    public function getPaises(){

        $sql = "SELECT * FROM paises ORDER BY idPais DESC";

        $paises = $this->db->query($sql);

        return $paises;
    }

}
