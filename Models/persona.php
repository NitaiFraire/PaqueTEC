<?php

class Persona{

    // Foreign keys
    private $idColonia;

    private $nombre;
    private $materno;
    private $paterno;
    private $edad;
    private $rfc;
    private $curp;
    private $genero;
    private $email;
    private $telefono;
    private $domicilio;
    
    private $db;

    public function __construct(){
        
        $this->db = DataBase::connect();
    }

    
    public function getIdColonia(){

        return $this->idColonia;
    }

    public function setIdColonia($idColonia){

        $this->idColonia = $idColonia;
    }


    public function getNombre(){

        return $this->nombre;
    }

    public function setNombre($nombre){

        $this->nombre = $nombre;
    }


    public function getMaterno(){

        return $this->materno;
    }

    public function setMaterno($materno){
        
        $this->materno = $materno;
    }


    public function getPaterno(){

        return $this->paterno;
    }

    public function setPaterno($paterno){

        $this->paterno = $paterno;
    }


    public function getEdad(){

        return $this->edad;
    }

    public function setEdad($edad){

        $this->edad = $edad;

    }

 
    public function getRfc(){

        return $this->rfc;
    }


    public function setRfc($rfc){

        $this->rfc = $rfc;
    }


    public function getCurp(){

        return $this->curp;
    }

    public function setCurp($curp){

        $this->curp = $curp;
    }


    public function getGenero(){

        return $this->genero;
    }

    public function setGenero($genero){

        $this->genero = $genero;

    }


    public function getEmail(){

        return $this->email;
    }

    public function setEmail($email){

        $this->email = $email;
    }


    public function getTelefono(){

        return $this->telefono;
    }

    public function setTelefono($telefono){
        
        $this->telefono = $telefono;
    }


    public function getDomicilio(){

        return $this->domicilio;
    }

    public function setDomicilio($domicilio){
        
        $this->domicilio = $domicilio;
    }
}

?>