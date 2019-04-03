<?php

require_once 'Models/persona.php';

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

    /* Funciones de modelo */

    public function register(){
        
        $sql = "INSERT INTO clientes VALUES('{$this->getIdColonia()}',
                                            '{$this->getIdCiudad()}',
                                            '{$this->getIdEstado()}',
                                            '{$this->getIdPais()}',
                                            NULL,
                                            '{$this->getNombre()}',
                                            '{$this->getPaterno()}',
                                            '{$this->getMaterno()}',
                                            '{$this->getEdad()}',
                                            '{$this->getRfc()}',
                                            '{$this->getCurp()}',
                                            '{$this->getGenero()}',
                                            '{$this->getEmail()}',
                                            '{$this->getTelefono()}',
                                            '{$this->getDomicilio()}')";
        $save = $this->db->query($sql);

        $result = false;

        if($save){

            $result = true;

        }

        return $result;
    }

    public function getClientes(){
        
        $sql = "SELECT * FROM clientes ORDER BY idCliente DESC";

        $clientes = $this->db->query($sql);

        return $clientes;
    }

    /* /Funciones de modelo */

}


?>