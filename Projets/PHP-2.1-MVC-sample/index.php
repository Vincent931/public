<?php session_start();
    include './controllers/HomeController.php';
    
    // route accueil 
    if($_GET['action'] == 'accueil'){
        
        $controller = new HomeController();
        $controller->index();
    }
    
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
    
    //route products
    if($_GET['action'] == 'products'){
        
        $controller = new HomeController();
        $controller->showProducts();
    }
    
    
    