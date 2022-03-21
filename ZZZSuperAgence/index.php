<?php session_start();
    require './controllers/HomeController.php';
    require './controllers/UserController.php';
    require './controllers/ProductController.php';
    require './models/User.php';
    require './models/Template.php';
    require './models/Product.php';
    require './service/AbstractView.php';
    require './views/HomeView.php';
    require './views/UserView.php';
    require './views/ProductView.php';
    require './service/AbstractRepository.php';
    require './repository/ProductRepository.php';
    require './repository/UserRepository.php';
    require './service/Utils.php';

    //route par defaut
    if(!$_GET['action']){
        header('Location: ./index.php?action=accueil');
    }
    
    switch($_GET['action']){
        
        //page d'accueil
        case 'accueil':
            $controller = new HomeController();
            $controller->index();
            break;
        //page register
        case 'inscription':
            $controller = new UserController();
            $controller->inscriptForm();
            break;
        //validation page register
        case 'receive-inscript':
            $controller = new UserController();
            $controller->inscriptInsertUser();
            break;
        //page login
        case 'connect':
            $controller = new UserController();
            
            if(isset($_GET['message'])){
                $message=$_GET['message'];
                $controller->connectUser($message);
            } else {
                $controller->connectUser($message="");
            }
            break;
        //validation page login
        case 'valid-form-security':
            $controller = new UserController();
            $controller->validForm();
            break;
        //page produits
        case 'products':
            $controller = new ProductController();
            $controller->showProducts();
            break;
        //page erreur
        case 'error':
            $controller = new UserController();

            if(isset($_GET['message'])){
                $message=$_GET['message'];
                $controller->showError($message);
            } else {
                $controller->showError($message="");
            }
            break;
        //page success
        case 'succes':
             $controller = new UserController();
        
            if(isset($_GET['message'])){
                $message=$_GET['message'];
                $controller->showSuccess($message);
            } else {
                $controller->showSuccess($message="");
            }
            break;
        //page compte
        case 'account':
            $controller = new UserController();
            $controller->accountUser();
            break;
        //page RGPD
         case 'RGPD':
            $controller = new HomeController();
            $controller->RGPD();
            break;
        //page contact
         case 'contact':
            $controller = new HomeController();
            $controller->contact();
            break;
        //envoi d'email
        case 'email':
            $controller = new HomeController();
            $controller->email();
            break;
        /************************************TO DO*********************/
        //page préférés
        case 'preferences':
            //$controller = new ();
            //$controller->();
            break;
        //Page présentation de la société
        case 'a-propos':
            //$controller = new HomeController();
            //$controller->aPropos();
            break;
        /******************************* DONE admin **************************************/
        //page admin
        case 'admin':
            $controller = new HomeController();
            $controller->admin();
            break;
        //page ajout de produit
        case 'add-product':
            $controller = new ProductController();
            $controller->addProduct();
            break;
        //insertion d'un produit
        case 'validate-add-product':
            $controller = new ProductController();
            $controller->validateAddProduct();
            break;
        //page erase et update des produits
        case 'erase-update-product':
            $controller = new ProductController();
            $controller->eraseUpdateProduct();
            break;
        //page confirmation d'effacement de produit
        case 'confirm-erase-product':
            $controller = new ProductController();
            $controller->confirmEraseProduct();
            break;
        //effacement d'un produit
        case 'validate-erase-product':
            $controller = new ProductController();
            $controller->validateEraseProduct();
            break;
        //page de updating produit
        case 'show-update-product':
            $controller = new ProductController();
            $controller->showFormUpdateProduct();
            break;
        //update produit
        case 'validate-update-product':
            $controller = new ProductController();
            $controller->validateUpdateProduct();
            break;
        //defaut accueil
        default:
            $controller = new HomeController();
            $controller->index();
        break;
    }
    
    