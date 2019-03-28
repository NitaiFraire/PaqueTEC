<?php

class Persona{

    // Foreign keys
    protected $idColonia;
    protected $idCiudad;
    protected $idEstado;
    protected $idPais;

    protected $nombre;
    protected $materno;
    protected $paterno;
    protected $edad;
    protected $rfc;
    protected $curp;
    protected $genero;
    protected $telefono;
    protected $domicilio;
    protected $email;
    
    protected $db;

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

        $this->nombre = $this->db->real_escape_string($nombre);
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

        $this->paterno = $this->db->real_escape_string($paterno);
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

        $this->rfc = $this->db->real_escape_string($rfc);
    }


    public function getCurp(){

        return $this->curp;
    }

    public function setCurp($curp){

        $this->curp = $this->db->real_escape_string($curp);
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

        $this->email = $this->db->real_escape_string($email);
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
        
        $this->domicilio = $this->db->real_escape_string($domicilio);
    }



    public function getIdCiudad(){
        
        return $this->idCiudad;
    }

    public function setIdCiudad($idCiudad){
        
        $this->idCiudad = $idCiudad;
    }


    public function getIdEstado(){

        return $this->idEstado;
    }

    public function setIdEstado($idEstado){

        $this->idEstado = $idEstado;
    }


    public function getIdPais(){

        return $this->idPais;
    }

    public function setIdPais($idPais){

        $this->idPais = $idPais;
    }
}

?>