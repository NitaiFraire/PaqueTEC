<?php

    class Utils{

        public static function showError(){
            
            $error = new ErrorController();
            $error->index();
        }
    }

?>