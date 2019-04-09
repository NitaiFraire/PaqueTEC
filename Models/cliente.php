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
        
        $sql = "SELECT  cli.idCliente, cli.nombre, cli.paterno, cli.materno, cli.rfc, cli.curp, cli.email, cli.telefono, cli.domicilio,
                        col.nombreColonia AS nombreColonia, ciu.nombreCiudad AS nombreCiudad, est.nombreEstado AS nombreEstado, pai.nombrePais AS nombrePais
                FROM    clientes cli, colonias col, ciudades ciu, estados est, paises pai 
                WHERE   cli.idPais = col.idPais AND
                        cli.idEstado = col.idEstado AND
                        cli.idCiudad = col.idCiudad AND
                        cli.idColonia = col.idColonia AND

                        col.idPais = ciu.idPais AND
                        col.idEstado = ciu.idEstado AND
                        col.idCiudad = ciu.idCiudad AND

                        ciu.idPais = est.idPais AND
                        ciu.idEstado = est.idEstado AND

                        est.idPais = pai.idPais
                ORDER BY idCliente DESC";

        $clientes = $this->db->query($sql);

        return $clientes;
    }

    public function getClientesPorCiudad(){
        
        $sql = "SELECT * FROM clientes WHERE idCiudad = {$this->getIdCiudad()} ORDER BY idCliente DESC";

        $clientes = $this->db->query($sql);

        return $clientes;
    }

    public function getPaquetesClientes(){
        
        $sql = "SELECT  idCliente, CONCAT(nombre, ' ', paterno) AS nombre
                
                FROM    clientes
                
                ORDER BY idCliente DESC";
        
        $clientes = $this->db->query($sql);

        return $clientes;
    }

    /* /Funciones de modelo */

}


?>