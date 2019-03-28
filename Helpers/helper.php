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

        public static function showColonias(){

            require_once 'Models/colonias.php';

            $colonia = new Colonia();
            $colonias = $colonia->getColonias();

            return $colonias;
        }

        public static function isAdmin(){


            if(!isset($_SESSION['identified'])){

                header('Location:' . baseUrl);

            }elseif(!isset($_SESSION['admin'])){

                header('Location:' . baseUrl . 'Paquete/index');

            }else{

                return true;
            }
        }
    }

?>