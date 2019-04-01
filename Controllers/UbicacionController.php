<?php

    class UbicacionController{

        public function getEstados(){

            if(isset($_GET['idPais'])){
                
                require_once 'Models/estado.php';
    
                $idPais = $_GET['idPais'];
    
                $estado = new Estado();
    
                $estado->setIdPais($idPais);
                $estados = $estado->getEstados();
                
                require_once 'Views/usuario/listadoEstados.php';
    
            }else{
    
                header('Location:' . baseUrl . 'Empleado/register');
            }
        }

        public function getCiudades(){

            if(isset($_GET['idEstado'])){
                
                require_once 'Models/ciudad.php';
    
                $idEstado = $_GET['idEstado'];
    
                $ciudad = new Ciudad();
    
                $ciudad->setIdEstado($idEstado);
                $ciudades = $ciudad->getCiudades();
                
                require_once 'Views/usuario/listadoCiudades.php';
    
            }else{
    
                header('Location:' . baseUrl . 'Empleado/register');
            }
        }
    
        public function getColonias(){
            
            if(isset($_GET['idCiudad'])){
    
                require_once 'Models/colonias.php';   
                
                $idCiudad = $_GET['idCiudad'];
    
                $colonia = new Colonia;
    
                $colonia->setIdCiudad($idCiudad);
                $colonias = $colonia->getColonias();
    
                require_once 'Views/usuario/listadoColonias.php';
    
            }else{
    
                header('Location:' . baseUrl . 'Empleado/register');
            }
        }
    }
?>