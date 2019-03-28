<?php

require_once 'Models/persona.php';

class Empleado extends Persona{

    private $idEmpleado;
    private $rol;
    private $password;

    public function __construct(){

        parent::__construct();
        
    }

    /* /Métodos getter y setter */

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

    /* /Métodos getter y setter */


    /* Funciones de modelo */
    
    public function register(){
        
        $sql = "INSERT INTO empleados VALUES({$this->getIdColonia()},
                                             '{$this->getIdCiudad()}',
                                             '{$this->getIdEstado()}',
                                             '{$this->getIdPais()}',
                                              null,
                                             '{$this->getNombre()}',
                                             '{$this->getPaterno()}',
                                             '{$this->getMaterno()}',
                                             '{$this->getEdad()}',
                                             '{$this->getRfc()}',
                                             '{$this->getCurp()}',
                                             '{$this->getGenero()}',
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

        return $result;
    }

    public function login(){

        $result = false;
        
        $email = $this->email;
        $password = $this->password;

        $sql = "SELECT * FROM empleados WHERE email = '$email'";

        $login = $this->db->query($sql);

        if($login && $login->num_rows == 1){

            $empleado = $login->fetch_object();

            $verify = password_verify($password, $empleado->password);

            if($verify){

                $result = $empleado;
            }
        }

        return $result;
    }

    public function getEmpleados(){

        $sql = "SELECT * FROM empleados ORDER BY idEmpleado DESC";

        $empleados = $this->db->query($sql);

        return $empleados;
    }

    /* /funciones de modelo */
}

?>