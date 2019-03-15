<?php

    function controllersAutoload($className){
        
        include 'Controllers/' . $className . '.php';
    }

    spl_autoload_register('controllersAutoload');
?>