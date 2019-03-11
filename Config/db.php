<?php

class DataBase{

    public static function connect(){
        
        $db = new mysqli('localhost', 'root', '', 'paqueteria');
        $db->query("SET NAMES 'utf9'");

        return $db;
    }
}

?>