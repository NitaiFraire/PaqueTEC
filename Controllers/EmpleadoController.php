<?php

require_once 'Models/empleado.php';

class EmpleadoController{


    public function index(){

        require_once 'Views/usuario/index.php';
    }

    public function formRegister(){

        Utils::isAdmin();
        require_once 'Views/empleado/formRegister.php';
    }

    public function formLogIn(){
        
        require_once 'Views/empleado/formLogIn.php';
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
            $domicilio = isset($_POST['domicilio']) ? $_POST['domicilio'] : false;
            $rfc = isset($_POST['rfc']) ? $_POST['rfc'] : false;
            $curp = isset($_POST['curp']) ? $_POST['curp'] : false;
            $colonia = isset($_POST['colonia']) ? $_POST['colonia'] : false;
            $ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : false;
            $estado = isset($_POST['estado']) ? $_POST['estado'] : false;
            $pais = isset($_POST['pais']) ? $_POST['pais'] : false;

            if($nombre && $materno && $paterno
                && $email && $password && $edad 
                && $genero && $telefono && $colonia && $domicilio
                && $rfc && $curp && $ciudad && $estado && $pais){

               
                $empleado = new Empleado();
                
                $empleado->setNombre($nombre);
                $empleado->setMaterno($materno);
                $empleado->setPaterno($paterno);
                $empleado->setEmail($email);
                $empleado->setPassword($password);
                $empleado->setEdad($edad);
                $empleado->setGenero($genero);
                $empleado->setTelefono($telefono);
                $empleado->setDomicilio($domicilio);
                $empleado->setRfc($rfc);
                $empleado->setCurp($curp);
                $empleado->setIdColonia($colonia);
                $empleado->setIdCiudad($ciudad);
                $empleado->setIdEstado($estado);
                $empleado->setIdPais($pais);
                
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

        header('Location:' . baseUrl . 'Empleado/formRegister');
    }

    public function logIn(){
        
        if(isset($_POST)){

            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;

            if($email && $password){

                $empleado = new Empleado();
    
                $empleado->setEmail($email);
                $empleado->setPassword($password);
    
                $identity = $empleado->login();

                if($identity && is_object($identity)){

                    $_SESSION['identified'] = $identity;

                    if($identity->rol == 0){

                        $_SESSION['admin'] = true;
                    }

                    header('Location:' . baseUrl . 'Paquete/index');
                
                }else{

                    $_SESSION['errorLog'] = 'Esta no es tu identificación';
                    
                    header('Location:' . baseUrl . 'Empleado/formLogIn');
                }

            }else{

                $_SESSION['errorLog'] = 'No se recibieron datos de usuario';
            }
            
        }else{

            $_SESSION['errorLog'] = 'No se recibieron datos';
        }
    }
    
    public function logOut(){

        if(isset($_SESSION['identified'])){

            unset($_SESSION['identified']);
        }

        if(isset($_SESSION['admin'])){

            unset($_SESSION['admin']);
        }

        header('Location:' . baseUrl);
    }

    public function getAll(){

        Utils::isAdmin();
        
        $empleado = new Empleado();
        $empleados = $empleado->getEmpleados();

        require_once 'Views/empleado/listaEmpleados.php';
    }
}
