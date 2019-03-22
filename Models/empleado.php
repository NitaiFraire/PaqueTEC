<?php

require_once 'Models/persona.php';

class Empleado extends Persona{

    private $idEmpleado;
    private $rol;
    private $password;

    public function __construct(){

        parent::__construct();
    }


    public function getIdEmpleado(){
        
        return $this->idEmpleado;
    }

    public function setIdEmpleado($idEmpleado){
        
        $this->idEmpleado = $idEmpleado;
    }


    public function getRol(){

        return $this->rol;
    }

    public function setRol($rol){
        
        $this->rol = $rol;
    }


    public function getPassword(){

        $encriptarPassword = $this->db->real_escape_string($this->password);
        $this->password = password_hash($encriptarPassword, PASSWORD_BCRYPT, ['cost' => 4]);

        return $this->password;
    }

    public function setPassword($password){

        $this->password = $password;
    }

    public function register(){
        
        $sql = "INSERT INTO empleados VALUES(null,
                                             '{$this->getNombre()}',
                                             '{$this->getMaterno()}',
                                             '{$this->getPaterno()}',
                                             '{$this->getEdad()}',
                                             '{$this->getRfc()}',
                                             '{$this->getCurp()}',
                                             '{$this->getGenero}',
                                             '{$this->getEmail()}',
                                             '{$this->getPassword()}',
                                              {$this->getTelefono()},
                                             '{$this->getDomicilio()}',
                                              1);";

        $save = $this->db->query($sql);

        $result = false;

        if($save){

            $result = true;
        }

        return resutl;
    }
}

?>