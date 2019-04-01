<?php

class Colonia{

    // Foreign keys
    private $idPais;
    private $idEstado;
    private $idCiudad;

    private $idColonia;
    private $nombreColonia;
    
    private $db;

    public function __construct(){
        
        $this->db = DataBase::connect();
    }

    /* Métodos getter y setter */

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


    public function getIdCiudad(){
        
        return $this->idCiudad;
    }

    public function setIdCiudad($idCiudad){
        
        $this->idCiudad = $idCiudad;
    }


    public function getIdColonia(){
        
        return $this->idColonia;
    }
 
    public function setIdColonia($idColonia){
       
        $this->idColonia = $idColonia;
    }


    public function getNombreColonia(){
        
        return $this->nombreColonia;
    }

    public function setNombreColonia($nombreColonia){
        
        $this->nombreColonia = $nombreColonia;
    }

    /* /Métodos getter y setter */

    
    /* Funciones de modelo */
    
    public function getColonias(){
        
        $sql = "SELECT * FROM colonias WHERE idCiudad = {$this->getIdCiudad()} ORDER BY idColonia DESC";
        $colonias = $this->db->query($sql);

        return $colonias;
    }

    /* /Funciones de modelo */
}

?>