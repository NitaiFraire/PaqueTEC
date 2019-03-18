<?php

    session_start();

    require_once 'autoload.php';
    require_once 'Helpers/helper.php';
    require_once 'Config/db.php';
    require_once 'Config/parameters.php';
    require_once 'Views/layout/header.php';
    
    

    if(isset($_GET['controller'])){

        $nameController = $_GET['controller'] . 'Controller';

    }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){

        $nameController = controllerDefault;

    }else{

        Utils::showError();
    }

    if(class_exists($nameController)){

        $controller = new $nameController();

        if(isset($_GET['action']) && method_exists($controller, $_GET['action'])){

            $action = $_GET['action'];
            $controller->$action();
        
        }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){

            $actionDefault = actionDefault;
            $controller->$actionDefault();

        }else{

            Utils::showError();
        }

    }else{

        Utils::showError();
    } 

    require_once 'Views/layout/footer.php';

?>