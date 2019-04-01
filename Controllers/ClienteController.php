<?php

require_once 'Models/cliente.php';

class ClienteController{
    
    public function formRegister(){
        
        Utils::isIdentified();
        
        require_once 'Views/cliente/formRegister.php';
    }
}



?>