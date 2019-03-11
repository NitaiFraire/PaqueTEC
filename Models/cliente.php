<?php

class Cliente extends Persona{
    
    private $idCliente;

    public function __construct(){
        
        parent::__construct();
    }


    public function getIdCliente(){

        return $this->idCliente;
    }
 
    public function setIdCliente($idCliente){

        $this->idCliente = $idCliente;

    }

}


?>