<?php

    require_once 'Models/paquete.php';

    class PaqueteController{

        public function index(){
            
            require_once 'Views/paquete/listadoPaquetes.php';
        }
    }