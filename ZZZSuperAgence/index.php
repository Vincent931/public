<?php session_start();
    require_once './controllers/HomeController.php';
    require_once './controllers/UserController.php';
    require_once './controllers/ProductController.php';
    require_once './controllers/AdminController.php';
    require_once './controllers/EmailController.php';
    require_once './environment.php';
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
            $controller->connectUser();
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
            $controller = new HomeController();
            $controller->showError();
            break;
        //page success
        case 'succes':
            $controller = new HomeController();
            $controller->showSuccess();
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
            $controller = new EmailController();
            $controller->contact();
            break;
        //envoi d'email ne fonctionne pas sur l'IDE
        case 'email':
            $controller = new EmailController();
            $controller->email();
            break;
        //la page a propos
        case 'a-propos':
            $controller = new HomeController();
            $controller->aPropos();
            break;
        //le listing des maisons et appartements
        case 'product':
            $controller = new ProductController();
            $controller->oneProduct();
            break;
        //ajout de favori en bdd
        case 'add-favori':
            $controller = new ProductController();
            $controller->addFavori();
            break;
        //page préférés
        case 'favoris':
            $controller = new ProductController();
            $controller->favoris();
            break;
        //page de confirmation delete produit
        case 'erase-favori':
            $controller = new ProductController();
            $controller->eraseFavoris();
            break;
        //la window affichant les images sous add product et update product
        case 'window-img':
            $controller = new HomeController();
            $controller->windowImage();
            break;
        /******************************* DONE admin **************************************/
        //page admin
        case 'admin':
            $controller = new AdminController();
            $controller->admin();
            break;
        //page ajout de produit
        case 'add-product':
            $controller = new AdminController();
            $controller->addProduct();
            break;
        //insertion d'un produit
        case 'validate-add-product':
            $controller = new AdminController();
            $controller->validateAddProduct();
            break;
        //page erase et update des produits
        case 'erase-update-product':
            $controller = new AdminController();
            $controller->eraseUpdateProduct();
            break;
        //page confirmation d'effacement de produit
        case 'confirm-erase-product':
            $controller = new AdminController();
            $controller->confirmEraseProduct();
            break;
        //effacement d'un produit
        case 'validate-erase-product':
           $controller = new AdminController();
           $controller->validateEraseProduct();
            break;
        //page de updating produit
        case 'show-update-product':
            $controller = new AdminController();
            $controller->showFormUpdateProduct();
            break;
        //update produit
        case 'validate-update-product':
            $controller = new AdminController();
            $controller->validateUpdateProduct();
            break;
        //defaut accueil
        default:
            $controller = new HomeController();
            $controller->index();
        break;
    }
    
    