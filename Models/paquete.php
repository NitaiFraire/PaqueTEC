<?php

class Paquete{

    // Foreign keys
    private $idCliente;
    private $idEmpleado;

    private $idPaquete;
    private $fechaEnvio;
    private $contenido;
    private $peso;
    private $diaAlta;
    private $precioEnvio;
    private $observaciones;
    private $fechaEntrega;
    private $horaEntrega;
    
    private $db;


    public function __construct(){
        
        $this->db = DataBase::connect();
    }


    public function getIdCliente(){

        return $this->idCliente;
    }

    public function setIdCliente($idCliente){

        $this->idCliente = $idCliente;
    }


    public function getIdEmpleado(){
        
        return $this->idEmpleado;
    }

    public function setIdEmpleado($idEmpleado){

        $this->idEmpleado = $idEmpleado;
    }


    public function getIdPaquete(){

        return $this->idPaquete;
    }

    public function setIdPaquete($idPaquete){
        
        $this->idPaquete = $idPaquete;
    }


    public function getFechaEnvio(){
        
        return $this->fechaEnvio;
    }

    public function setFechaEnvio($fechaEnvio){

        $this->fechaEnvio = $fechaEnvio;
    }


    public function getContenido(){

        return $this->contenido;
    }

    public function setContenido($contenido){

        $this->contenido = $contenido;
    }


    public function getPeso(){

        return $this->peso;
    }


    public function setPeso($peso){

        $this->peso = $peso;
    }


    public function getDiaAlta(){

        return $this->diaAlta;
    }

    public function setDiaAlta($diaAlta){

        $this->diaAlta = $diaAlta;
    }


    public function getPrecioEnvio(){

        return $this->precioEnvio;
    }

    public function setPrecioEnvio($precioEnvio){
        
        $this->precioEnvio = $precioEnvio;
    }


    public function getObservaciones(){

        return $this->observaciones;
    }

    public function setObservaciones($observaciones){

        $this->observaciones = $observaciones;
    }


    public function getFechaEntrega(){

        return $this->fechaEntrega;
    }

    public function setFechaEntrega($fechaEntrega){
        
        $this->fechaEntrega = $fechaEntrega;
    }


    public function getHoraEntrega(){

        return $this->horaEntrega;
    }

    public function setHoraEntrega($horaEntrega){

        $this->horaEntrega = $horaEntrega;
    }
}

?>