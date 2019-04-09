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
    private $estado;
    
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


    public function getEstado(){
        
        return $this->estado;
    }

    public function setEstado($estado){

        $this->estado = $estado;
    }

    /* Funciones de modelo */

    public function register(){
        
        $sql = "INSERT INTO paquetes VALUES('{$this->getIdCliente()}',
                                            '{$this->getIdEmpleado()}',
                                            NULL,
                                            '{$this->getFechaEnvio()}',
                                            '{$this->getContenido()}',
                                            '{$this->getPeso()}',
                                            '{$this->getDiaAlta()}',
                                            '{$this->getPrecioEnvio()}',
                                            '{$this->getObservaciones()}',
                                            '{$this->getFechaEntrega()}',
                                            '{$this->getHoraEntrega()}',
                                            '{$this->getEstado()}')";
        
        $save = $this->db->query($sql);
 
        $result = false;

        if($save){

            $result = true;

        }

        return $result;
    }

    public function getAll(){
        
        $sql = "SELECT  paq.idPaquete, paq.diaAlta, paq.fechaEnvio, paq.fechaEntrega, paq.horaEntrega,
                        paq.contenido, paq.observaciones, paq.estado, paq.idEmpleado,
                        CONCAT(cli.nombre, ' ', cli.paterno) AS cliente,
                        CONCAT(emp.nombre, ' ', emp.paterno) AS empleado
                FROM    paquetes paq, clientes cli, empleados emp
                WHERE   paq.idCliente = cli.idCliente AND

                        paq.idEmpleado = emp.idEmpleado
                ORDER BY idPaquete DESC;";

        $paquetes = $this->db->query($sql);

        return $paquetes;
    }

    public function updateEstado(){
        
        $sql = "UPDATE  paquetes SET estado = '{$this->getEstado()}'
                WHERE   idPaquete = '{$this->getIdPaquete()}'";

        $save = $this->db->query($sql);

        $result = false;

        if($save){

            $result = true;
        }
        
        return $result;
    }

    public function getPorEstado(){
        
        $sql = "SELECT  paq.idPaquete, paq.diaAlta, paq.fechaEnvio, paq.fechaEntrega, paq.horaEntrega,
                        paq.contenido, paq.observaciones, paq.estado, paq.idEmpleado,
                        CONCAT(cli.nombre, ' ', cli.paterno) AS cliente,
                        CONCAT(emp.nombre, ' ', emp.paterno) AS empleado
                FROM    paquetes paq, clientes cli, empleados emp
                WHERE   paq.idCliente = cli.idCliente AND

                        paq.idEmpleado = emp.idEmpleado AND

                        paq.estado = '{$this->getEstado()}'
                ORDER BY idPaquete DESC;";
        
        $paquetes = $this->db->query($sql);

        return $paquetes;
    }

    public function getPorFecha(){
        
        $sql = "SELECT  paq.idPaquete, paq.fechaEntrega, paq.horaEntrega,
                        CONCAT(cli.nombre, ' ', cli.paterno) AS cliente
                
                FROM    paquetes paq, clientes cli
                
                WHERE   paq.idCliente = cli.idCliente AND
                        paq.fechaEntrega = '{$this->getFechaEntrega()}'
                
                ORDER BY idPaquete DESC";
        
        $paquetes = $this->db->query($sql);

        return $paquetes;
    }

    public function getPorCliente(){
        
        $sql = "SELECT  paq.idPaquete, paq.fechaEntrega, paq.contenido,
                        CONCAT(emp.nombre, ' ', emp.paterno) AS empleado
                
                FROM    paquetes paq, empleados emp
                
                WHERE   paq.idEmpleado = emp.idEmpleado AND
                        paq.idCliente = '{$this->getIdCliente()}' AND
                        paq.estado = 2";

        $paquetes = $this->db->query($sql);

        return $paquetes;
    }

    public function getPorEmpleado(){
        
        $sql = "SELECT  paq.idPaquete, paq.fechaEntrega, paq.horaEntrega, paq.contenido,
                        CONCAT(cli.nombre, ' ', cli.paterno) AS cliente
                
                FROM    paquetes paq, clientes cli
                
                WHERE   paq.idCliente = cli.idCliente AND
                        paq.idEmpleado = '{$this->getIdEmpleado()}' AND
                        paq.estado = 2;";
        
        $paquetes = $this->db->query($sql);

        return $paquetes;
    }

    public function getDevolucionPorEmpleado(){
        
        $sql = "SELECT  paq.idPaquete, paq.fechaEntrega,    
                        CONCAT(cli.nombre, ' ', cli.paterno) AS cliente,
                        dev.fechaDevolucion, dev.motivoDevolucion
                
                FROM    paquetes paq, clientes cli, devoluciones dev

                WHERE   dev.idPaquete = paq.idPaquete AND
                        paq.idCliente = cli.idCliente AND
                        paq.idEmpleado = '{$this->getIdEmpleado()}' AND
                        paq.estado = 3

                ORDER BY idDevolucion DESC";

        $devoluciones = $this->db->query($sql);

        return $devoluciones;
    }

    /* /Funciones de modelo '{$this->getEstado()}'*/


}

?>