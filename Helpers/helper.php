<?php

    class Utils{

        public static function showError(){
            
            $error = new ErrorController();
            $error->index();
        }

        public static function deleteSession($name){

            if(isset($_SESSION[$name])){
                
                $_SESSION[$name] = null;
                unset($_SESSION[$name]);
            }

            return $name;
        }

        public static function showPaises(){

            require_once 'Models/pais.php';

            $pais = new Pais();
            $paises = $pais->getPaises();

            return $paises;
        }

        public static function showClientesPorCiudad(){
            
            require_once 'Models/cliente.php';

            $idCiudad = $_SESSION['identified']->idCiudad;

            $cliente = new Cliente();
            $cliente->setIdCiudad($idCiudad);
            $clientes = $cliente->getClientesPorCiudad();

            return $clientes;
        }

        public static function showClientes(){
            
            require_once 'Models/cliente.php';

            $cliente = new Cliente();
            $clientes = $cliente->getPaquetesClientes();

            return $clientes;
        }

        public static function showEmpleados(){
            
            require_once 'Models/empleado.php';

            $empleado = new Empleado();
            $empleados = $empleado->getPaquetesEmpleados();

            return $empleados;
        }

        // por estado de registro, enviados o entreados
        public static function showPaquetesPorEstado($estado){

            require_once 'Models/paquete.php';
    
            $paquete = new Paquete();
            $paquete->setEstado($estado);
            $paquetes = $paquete->getPorEstado();
    
            return $paquetes;

            
        }

        public static function isAdmin(){

            if(!isset($_SESSION['admin'])){

                header('Location:' . baseUrl);

            }else{

                return true;
            }
        }

        public static function isIdentified(){

            if(!isset($_SESSION['identified'])){
                
                header('Location:' . baseUrl);
                
            }else{
                
                return true;
            }
        }
    }

?>