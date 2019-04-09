<?php

class Devolucion{

    // Foreign keys
    private $idPaquete;

    private $idDevolucion;
    private $fechaDevolucion;
    private $motivoDevolucion;

    private $db;

    
    public function __construct(){
        
        $this->db = DataBase::connect();
    }

    
    public function getIdPaquete(){

        return $this->idPaquete;
    }

    public function setIdPaquete($idPaquete){

        $this->idPaquete = $idPaquete;
    }


    public function getIdDevolucion(){

        return $this->idDevolucion;
    }
 
    public function setIdDevolucion($idDevolucion){

        $this->idDevolucion = $idDevolucion;
    }

 
    public function getFechaDevolucion(){

        return $this->fechaDevolucion;
    }

    public function setFechaDevolucion($fechaDevolucion){

        $this->fechaDevolucion = $fechaDevolucion;
    }


    public function getMotivoDevolucion(){

        return $this->motivoDevolucion;
    }

    public function setMotivoDevolucion($motivoDevolucion){

        $this->motivoDevolucion = $motivoDevolucion;
    }

    /* Funciones de modelo */

    public function getPaquetesADevolver(){
        
        $sql = "SELECT * FROM paquetes WHERE estado = 3 AND
                                             idPaquete = '{$this->getIdPaquete()}'";

        $paquetes = $this->db->query($sql);

        return $paquetes->fetch_object();
    }

    public function register(){
        
        $sql = "INSERT INTO devoluciones VALUES('{$this->getIdPaquete()}',    
                                                NULL,
                                                '{$this->getFechaDevolucion()}',
                                                '{$this->getMotivoDevolucion()}')";
        
        $result = false;

        $save = $this->db->query($sql);

        if($save){

            $result = true;
        }

        return $result;
    }

    public function getAll(){
        
        $sql = "SELECT  dev.*,
                        paq.diaAlta, paq.fechaEnvio,
                        CONCAT(emp.nombre, ' ', emp.paterno) AS empleado,
                        CONCAT(cli.nombre, ' ', cli.paterno) AS cliente
                
                FROM    devoluciones dev, paquetes paq, empleados emp, clientes cli 

                WHERE   dev.idPaquete = paq.idPaquete AND
                        paq.idCliente = cli.idCliente AND
                        paq.idEmpleado = emp.idEmpleado
                
                ORDER BY idDevolucion DESC;";

        $devoluciones = $this->db->query($sql);

        return $devoluciones;
    }

    /* /Funciones de modelo */
}

?>