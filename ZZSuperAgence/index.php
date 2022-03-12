<?php session_start();
    require './controllers/HomeController.php';
    require './controllers/UserController.php';
    require './controllers/ProductController.php';
    require './models/User.php';
    require './models/Template.php';
    require './models/ProductsView.php';
    require './service/AbstractView.php';
    require './views/HomeView.php';
    require './service/AbstractRepository.php';
    require './repository/ProductRepository.php';
    require './repository/UserRepository.php';
    require './service/Utils.php';
   
    
    //route par defaut
    if(!$_GET['action']){
        header('Location: ./index.php?action=accueil');
    }
    
    switch($_GET['action']){
        case 'accueil':
            $controller = new HomeController();
            $controller->index();
        break;
        
        case 'inscription':
            $controller = new UserController();
            $controller->formInscriptUser();
        break;
        
        case 'receive-inscript':
            $controller = new UserController();
            $controller->inscriptInsertUser();
        break;
        
        case 'bdd':
            $controller = new HomeController();
            $controller->getUser();
        break;
        
        case 'connect':
            $controller = new UserController();
            
            if(isset($_GET['message'])){
                $message=$_GET['message'];
                $controller->connectUser($message);
            } else {
                $controller->connectUser($message="");
            }
        break;
        
        case 'form':
            $controller = new UserController();
            $controller->validForm();
        break;
        
        case 'products':
            $controller = new ProductController();
            $controller->showProducts();
        break;
        
         case 'error':
            $controller = new UserController();

            if(isset($_GET['message'])){
                $message=$_GET['message'];
                $controller->showError($message);
            } else {
                $controller->showError($message="");
            }
        break;
        
        case 'succes':
             $controller = new UserController();
        
            if(isset($_GET['message'])){
                $message=$_GET['message'];
                $controller->showSuccess($message);
            } else {
                $controller->showSuccess($message="");
            }
        break;
        
        case 'account':
            $controller = new UserController();
            $controller->accountUser();
            
        break;
        
        default:
            $controller = new HomeController();
            $controller->index();
        break;
    }
    
    