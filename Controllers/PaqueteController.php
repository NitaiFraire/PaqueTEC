<?php

    require_once 'Models/paquete.php';

    class PaqueteController{

        public function index(){
            
            Utils::isIdentified();

            $paquete = new Paquete();
            $paquetes = $paquete->getAll();
            
            require_once 'Views/paquete/listaPaquetes.php';
        }

        public function registrados(){
            
            Utils::isIdentified();
            
            require_once 'Views/paquete/listaPaquetesRegistrados.php';
        }

        public function enviados(){
            
            Utils::isIdentified();
            
            require_once 'Views/paquete/listaPaquetesEnviados.php';
        }

        public function entregados(){
            
            Utils::isIdentified();
            
            require_once 'Views/paquete/listaPaquetesEntregados.php';
        }


        public function formRegister(){

            Utils::isIdentified();

            require_once 'Views/paquete/formRegister.php';
        }

        public function register(){

            if(isset($_POST)){

                $empleado = $_SESSION['identified']->idEmpleado;
                $cliente = isset($_POST['cliente']) ? $_POST['cliente'] : false;
                $peso = isset($_POST['peso']) ? $_POST['peso'] : false;
                $precioEnvio = isset($_POST['precioEnvio']) ? $_POST['precioEnvio'] : false;
                $fechaAlta = isset($_POST['fechaAlta']) ? $_POST['fechaAlta'] : false;
                $fechaEnvio = isset($_POST['fechaEnvio']) ? $_POST['fechaEnvio'] : false;
                $fechaEntrega = isset($_POST['fechaEntrega']) ? $_POST['fechaEntrega'] : false;
                $horaEntrega = isset($_POST['horaEntrega']) ? $_POST['horaEntrega'] : false;
                $contenido = isset($_POST['contenido']) ? $_POST['contenido'] : false;
                $observaciones = isset($_POST['observaciones']) ? $_POST['observaciones'] : null;

                if($empleado && $cliente && $peso && $precioEnvio && 
                $fechaEnvio && $fechaEntrega && $fechaAlta &&
                $horaEntrega && $contenido){
                    
                    $paquete = new Paquete();

                        $paquete->setIdCliente($cliente);
                        $paquete->setIdEmpleado($empleado);
                        $paquete->setFechaEnvio($fechaEnvio);
                        $paquete->setContenido($contenido);
                        $paquete->setPeso($peso);
                        $paquete->setDiaAlta($fechaAlta);
                        $paquete->setPrecioEnvio($precioEnvio);
                        $paquete->setObservaciones($observaciones);
                        $paquete->setFechaEntrega($fechaEntrega);
                        $paquete->setHoraEntrega($horaEntrega);
                        
                        $save = $paquete->register();
                        
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

            header('Location:' . baseUrl . 'Paquete/formRegister');
        }

        public function estado(){
            
            Utils::isIdentified();

            if(isset($_POST['paqueteId']) && isset($_POST['estado'])){

                $idPaquete = $_POST['paqueteId'];
                $estado = $_POST['estado'];

                $paquete = new Paquete();
                $paquete->setIdPaquete($idPaquete);
                $paquete->setEstado($estado);
                $paquete->updateEstado();

                if($estado == 0){

                    header('Location:' . baseUrl . 'Paquete/index');

                }elseif($estado == 1){

                    header('Location:' . baseUrl . 'Paquete/enviados');

                }elseif($estado == 2){

                    header('Location:' . baseUrl . 'Paquete/entregados');

                }else{

                    header('Location:' . baseUrl . 'Devolucion/formRegister&idPaquete=' . $idPaquete);
                }
            }
        }

        public function entregasPorFecha(){
            
            Utils::isIdentified();

            require_once 'Views/paquete/listaEntregasPorFecha.php';
        }

        public function buscarPorFecha(){
            
            if(isset($_POST['fecha'])){

                $fechaEntrega = $_POST['fecha'];

                $paquete = new Paquete();
                $paquete->setFechaEntrega($fechaEntrega);
                $paquetes = $paquete->getPorFecha();

                require_once 'Views/paquete/listaEntregasPorFecha.php';

            }else{

                header('Location: ' . baseUrl . 'Paquete/index');
            }
        }

        public function entregasPorCliente(){

            Utils::isIdentified();

            require_once 'Views/paquete/listaEntregasPorCliente.php';
        }

        public function buscarPorCliente(){
            
            if(isset($_POST['idCliente'])){
                
                $idCliente = $_POST['idCliente'];

                $paquete = new Paquete();
                $paquete->setIdCliente($idCliente);
                $paquetes = $paquete->getPorCliente();
                
                require_once 'Views/paquete/listaEntregasPorCliente.php';
            
            }else{

                header('Location: ' . baseUrl . 'Paquete/index');
            }
        }


        public function entregasPorEmpleado(){

            Utils::isIdentified();

            require_once 'Views/paquete/listaEntregasPorEmpleado.php';
        }

        public function buscarPorEmpleado(){
            
            if(isset($_POST['idEmpleado'])){
                
                $idEmpleado = $_POST['idEmpleado'];

                $paquete = new Paquete();
                $paquete->setIdEmpleado($idEmpleado);
                $paquetes = $paquete->getPorEmpleado();
                
                require_once 'Views/paquete/listaEntregasPorEmpleado.php';
            
            }else{

                header('Location: ' . baseUrl . 'Paquete/index');
            }
        }   

        public function devolucionPorEmpleado(){

            Utils::isIdentified();
    
            require_once 'Views/devolucion/listaDevolucionesPorEmpleado.php';
        }

        public function buscarDevolucionPorEmpleado(){
            
            if(isset($_POST['idEmpleado'])){
                
                $idEmpleado = $_POST['idEmpleado'];

                $paquete = new Paquete();
                $paquete->setIdEmpleado($idEmpleado);
                $paquetes = $paquete->getDevolucionPorEmpleado();
                
                require_once 'Views/devolucion/listaDevolucionesPorEmpleado.php';
            
            }else{

                header('Location: ' . baseUrl . 'Paquete/index');
            }
        }   
    }