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