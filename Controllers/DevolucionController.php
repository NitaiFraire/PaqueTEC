<?php

require_once 'Models/devolucion.php';

class DevolucionController{
    
    public function formRegister(){
        
        Utils::isIdentified();
        
        if(isset($_GET['idPaquete'])){

            $idPaqueteADevolver = $_GET['idPaquete'];
            
            $devolucion = new Devolucion();
            $devolucion->setIdPaquete($idPaqueteADevolver);
            $paquete = $devolucion->getPaquetesADevolver();
 
        }else{

            $paquete = null;
        }
        
        require_once 'Views/devolucion/formRegister.php';
    }

    public function getAll(){
        
        Utils::isIdentified();

        $devolucion = new Devolucion();
        $devoluciones = $devolucion->getAll();

        require_once 'Views/devolucion/listaDevoluciones.php';
    }

    public function register(){
        
        if(isset($_POST)){

            $idPaquete = isset($_POST['idPaquete']) ? $_POST['idPaquete'] : false;
            $fechaDevolucion = isset($_POST['fechaDevolucion']) ? $_POST['fechaDevolucion'] : false;
            $motivoDevolucion = isset($_POST['motivoDevolucion']) ? $_POST['motivoDevolucion'] : false;
            
            if($idPaquete && $fechaDevolucion && $motivoDevolucion){

                $devolucion = new Devolucion();
                $devolucion->setIdPaquete($idPaquete);
                $devolucion->setFechaDevolucion($fechaDevolucion);
                $devolucion->setMotivoDevolucion($motivoDevolucion);

                $save = $devolucion->register();

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

        header('Location:' . baseUrl . 'Devolucion/formRegister');
    }
}


?>