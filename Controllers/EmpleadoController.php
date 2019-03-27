<?php

require_once 'Models/empleado.php';

class EmpleadoController{


    public function index(){

        require_once 'Views/usuario/index.php';
    }

    public function register(){
        
        if(isset($_POST)){

            $nombre = isset($_POST['name']) ? $_POST['name'] : false;
            $materno = isset($_POST['materno']) ? $_POST['materno']: '';
            $paterno = isset($_POST['paterno']) ? $_POST['paterno'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;
            $edad = isset($_POST['edad']) ? $_POST['edad'] : false;
            $genero = isset($_POST['genero']) ? $_POST['genero'] : false;
            $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : false;
            $colonia = isset($_POST['colonia']) ? $_POST['colonia'] : false;
            $domicilio = isset($_POST['domicilio']) ? $_POST['domicilio'] : false;
            $rfc = isset($_POST['rfc']) ? $_POST['rfc'] : false;
            $curp = isset($_POST['curp']) ? $_POST['curp'] : false;

            if($nombre && $materno && $paterno
                && $email && $password && $edad 
                && $genero && $telefono && $colonia && $domicilio
                && $rfc && $curp){

               
                $empleado = new Empleado();
                
                $empleado->setNombre($nombre);
                $empleado->setMaterno($materno);
                $empleado->setPaterno($paterno);
                $empleado->setEmail($email);
                $empleado->setPassword($password);
                $empleado->setEdad($edad);
                $empleado->setGenero($genero);
                $empleado->setTelefono($telefono);
                $empleado->setIdColonia($colonia);
                $empleado->setDomicilio($domicilio);
                $empleado->setRfc($rfc);
                $empleado->setCurp($curp);
                
                $save = $empleado->register();
                
                if($save){

                    $_SESSION['register'] = 'success';

                }else{

                    $_SESSION['register'] = 'failed';
                }

            }else{

                $_SESSION['register'] = 'failed';
            }

        }else{

            $_SESSION['register'] = 'failed';
        }
    }
}
