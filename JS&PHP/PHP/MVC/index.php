<?php session_start();
    include './controllers/HomeController.php';
    
    
    // route mange 
    if($_GET['action'] == 'mange'){
        
        $controller = new HomeController();
        $controller->manger();
    }
    
    // route dors
    if($_GET['action'] == 'dors'){
        
        $controller = new HomeController();
        $controller->getUser();
    }
    
    // route bdd
    if($_GET['action'] == 'bdd'){
        
        $controller = new HomeController();
        $controller->getUser();
    }
    
    //route du formulaire
    if($_GET['action'] == 'connect'){
        
        $controller = new HomeController();
        if(isset($_GET['message'])){
            
            $message=$_GET['message'];
            $controller->connectUser($message);
        } else {
            $controller->connectUser($message="");
        }
    }
    
    //route validation formulaire
    if($_GET['action'] == 'form'){
        
        $controller = new HomeController();
        $controller->validForm();
    }
    
    
    