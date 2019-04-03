<?php

require_once 'Models/cliente.php';

class ClienteController{
    
    public function formRegister(){
        
        Utils::isIdentified();
        
        require_once 'Views/cliente/formRegister.php';
    }

    public function register(){
        
        if(isset($_POST)){

            $nombre = isset($_POST['name']) ? $_POST['name'] : false;
            $paterno = isset($_POST['paterno']) ? $_POST['paterno'] : false;
            $materno = isset($_POST['materno']) ? $_POST['materno'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : false;
            $edad = isset($_POST['edad']) ? $_POST['edad'] : false;
            $genero = isset($_POST['genero']) ? $_POST['genero'] : false;
            $pais = isset($_POST['pais']) ? $_POST['pais'] : false;
            $estado = isset($_POST['estado']) ? $_POST['estado'] : false;
            $ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : false;
            $colonia = isset($_POST['colonia']) ? $_POST['colonia'] : false;
            $domicilio = isset($_POST['domicilio']) ? $_POST['domicilio'] : false;
            $rfc = isset($_POST['rfc']) ? $_POST['rfc'] : false;
            $curp = isset($_POST['curp']) ? $_POST['curp'] : false;

            if($nombre && $paterno && $materno && $email &&
               $telefono && $edad && $genero && $pais && $estado &&
               $ciudad && $domicilio && $rfc && $curp){

                $cliente = new Cliente();

                $cliente->setNombre($nombre);
                $cliente->setMaterno($materno);
                $cliente->setPaterno($paterno);
                $cliente->setEmail($email);
                $cliente->setTelefono($telefono);
                $cliente->setEdad($edad);
                $cliente->setGenero($genero);
                $cliente->setIdPais($pais);
                $cliente->setIdEstado($estado);
                $cliente->setIdCiudad($ciudad);
                $cliente->setIdColonia($colonia);
                $cliente->setDomicilio($domicilio);
                $cliente->setRfc($rfc);
                $cliente->setCurp($curp);

                $save = $cliente->register();

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

        header('Location:' . baseUrl . 'Cliente/formRegister');
    }

    public function getAll(){

        Utils::isIdentified();

        $cliente = new Cliente;
        $clientes = $cliente->getClientes();

        require_once 'Views/cliente/listaClientes.php';
    }
}



?>