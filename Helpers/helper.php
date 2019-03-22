<?php

    class Utils{

        public static function showError(){
            
            $error = new ErrorController();
            $error->index();
        }

        public static function showColonias(){

            require_once 'Models/colonias.php';

            $colonia = new Colonia();
            $colonias = $colonia->getColonias();

            return $colonias;
        }
    }

?>