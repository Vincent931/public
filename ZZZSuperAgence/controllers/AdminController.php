<?php
require_once './repository/ProductRepository.php';
require_once './views/HomeView.php';
require_once './views/AdminView.php';
require_once './service/Authenticator.php';
require_once './service/MyError.php';
require_once './service/Success.php';

class AdminController{
    //renvoie page admin
    public function admin(): void
    {
        //validation admin
        $authenticator = new Authenticator();
        $view = new AdminView();
        $validate = $authenticator->authAdmin('user');
        
        if($validate){//si admin ok
            echo $view->viewAdmin();
        } else {
            $arrayFailed = ['message' =>'Veuillez vous connecter', 'href' => './index.php?action=connect', 'lien' => 'Réessayer', 'type' => 'other'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }
    }
    //renvoie page ajout de produit (formulaire)
    public function addProduct(): void
    {
        $viewHome = new HomeView();
        //validation admin
        $authenticator = new Authenticator();
        $validate = $authenticator->authAdmin('user');
        
        if($validate){//si admin ok
            $view = new AdminView();
            echo $view->viewAddProduct();
        } else {
            $arrayFailed = ['message' =>'Veuillez vous connecter', 'href' => './index.php?action=connect', 'lien' => 'Réessayer', 'type' => 'other'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }
    }
    //validation ajout de produit
    public function validateAddProduct(): void
    {
        $viewHome = new HomeView();
        
        if($_POST['csrf'] !== $_SESSION['csrf']){
            $arrayFailed = ['message' =>'Erreur Grave veuillez contacter l\'administrateur', 'href' => './index.php?action=add-product', 'lien' => 'Réessayer', 'type' => 'other'];
            $erreur = new MyError($arrayFailed);
            echo $erreur->manageFailed();
        }
         //validation admin
        $authenticator = new Authenticator();
        $validate = $authenticator->authAdmin('user');
        
        if($validate){//si admin ok
            //validation admin
            $view = new AdminView();
            $product = new Product();
             //si admin ok
             $i=0;
             
            foreach($_POST as $value){
                $arrayToProduct[$i] = htmlspecialchars($value);
                $i++;
            }
            
            $product->addDataFromPost($arrayToProduct);
            $repository = new ProductRepository();
            $data = $repository->insertProduct($product);
            
            if($data){
                $success = ['message' => 'Insertion OK', 'href' => "./index.php?action=admin", 'lien' => "Retourner à l'admin"];
                $succes = new Success($success);
                $succes->manageSuccess();
            } else {
                $arrayFailed = ['message' =>'Erreur Grave veuillez contacter l\'administrateur', 'href' => './index.php?action=add-product', 'lien' => 'Réessayer', 'type' => 'other'];
                $erreur = new MyError($arrayFailed);
                $erreur->manageFailed();
            }
        } else {
            $arrayFailed = ['message' =>'Veuillez vous connecter', 'href' => './index.php?action=connect', 'lien' => 'Réessayer', 'type' => 'other'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }
    }
    //renvoie sur la vue erase produit
    public function eraseUpdateProduct(): void
    {
        $repository = new ProductRepository();
        $view = new AdminView();
        $viewHome = new HomeView();

        if(!isset($_GET['page']) || !is_numeric($_GET['page'])){
            $view->setCurrentPage(1);
            $view->setPageDown(0);
            $view->setPageUp(2);
        } else {
            
            $view->setCurrentPage($_GET['page']);
            $view->setPageDown($_GET['page']-1);
            $view->setPageUp($_GET['page']+1);
        }

         //validation admin
        $authenticator = new Authenticator();
        $validate = $authenticator->authAdmin('user');
        
        if($validate){//si admin ok
            
            $results = $repository->fetchProd();
            echo $view->viewEraseUpdateProduct($results);
        } else {
            $arrayFailed = ['message' =>'Veuillez vous connecter', 'href' => './index.php?action=connect', 'lien' => 'Réessayer', 'type' => 'other'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }
    }
    //renvoie la vue de confirmation erase produit
    public function confirmEraseProduct(): void
    {
        $viewHome = new HomeView();
        
        if($_POST['csrf'] !== $_SESSION['csrf']){
                $arrayFailed = ['message' =>'Erreur Grave veuillez contacter l\'administrateur', 'href' => './index.php?action=erase-update-product', 'lien' => 'Réessayer', 'type' => 'other'];
                $erreur = new MyError($arrayFailed);
                $erreur->manageFailed();
        }
         //validation admin
        $authenticator = new Authenticator();
        $validate = $authenticator->authAdmin('user');
        
        if($validate){//si admin ok
        
            if(isset($_POST['idToErase'])){
                $repository = new ProductRepository();
                $data = $repository->fetchOneProd(htmlspecialchars($_POST['idToErase']));
            }
            $view = new AdminView();
            echo $view->viewConfirmEraseProduct($data);
        }  else {
            $arrayFailed = ['message' =>'Veuillez vous connecter', 'href' => './index.php?action=connect', 'lien' => 'Réessayer', 'type' => 'other'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }
    }
    
    //renvoie la validation d'effacement de produit
    public function validateEraseProduct(): void
    {
        $repository = new ProductRepository();
        $view = new AdminView();
        $viewHome = new HomeView();
        
        if($_POST['csrf'] !== $_SESSION['csrf']){
                $arrayFailed = ['message' =>'Erreur Grave veuillez contacter l\'administrateur', 'href' => './index.php?action=erase-update-product', 'lien' => 'Réessayer', 'type' => 'other'];
                $erreur = new MyError($arrayFailed);
                echo $erreur->manageFailed();
        }
         //validation admin
        $authenticator = new Authenticator();
        $validate = $authenticator->authAdmin('user');
        
        if($validate){//si admin ok
            
            $results = $repository->deleteProd(htmlspecialchars($_POST['idToErase']));
            
            if(!$results){
                $arrayFailed = ['message' =>'Erreur Grave, veuillez contacter l\'administrateur', 'href' => './index.php?action=erase-update-product', 'lien' => 'Retour', 'type' => 'other'];
                $erreur = new MyError($arrayFailed);
                echo $erreur->manageFailed();
            } else {
                
                $success = ['message' => 'Opération OK', 'href' => "./index.php?action=admin", 'lien' => "Retourner à l'admin"];
                $succes = new Success($success);
                $succes->manageSuccess();
            }
        } else {
            $arrayFailed = ['message' =>'Veuillez vous connecter', 'href' => './index.php?action=connect', 'lien' => 'Réessayer', 'type' => 'other'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }
    }
    
    public function showFormUpdateProduct(): void
    {
        $repository = new ProductRepository();
        $view = new AdminView();
        $viewHome = new HomeView();
        
        if($_POST['csrf'] !== $_SESSION['csrf']){
            $arrayFailed = ['message' =>'Erreur Grave veuillez contacter l\'administrateur', 'href' => './index.php?action=erase-update-product', 'lien' => 'Réessayer', 'type' => 'other'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }
        
         //validation admin
        $authenticator = new Authenticator();
        $validate = $authenticator->authAdmin('user');
        
        if($validate){//si admin ok
            if(isset($_POST['idToUpdate'])){
            $data = $repository->fetchOneProd(htmlspecialchars($_POST['idToUpdate']));
            }
        echo $view->viewUpdateProduct($data);
        } else {
            $arrayFailed = ['message' =>'Veuillez vous connecter', 'href' => './index.php?action=connect', 'lien' => 'Réessayer', 'type' => 'other'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }
    }
    
    public function validateUpdateProduct(): void
    {
        $repository = new ProductRepository();
        $product = new Product();
        $viewHome = new HomeView();
        
        if($_POST['csrf'] !== $_SESSION['csrf']){
            $arrayFailed = ['message' =>'Erreur Grave veuillez contacter l\'administrateur', 'href' => './index.php?action=erase-update-product', 'lien' => 'Réessayer', 'type' => 'other'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }
         //validation admin
        $authenticator = new Authenticator();
        $validate = $authenticator->authAdmin('user');
        $i = 0;
        if($validate){//si admin ok
        
        foreach($_POST as $value){
                $arrayToProduct[$i] = htmlspecialchars($value);
                $i++;
            }
            $product->addDataFromPost($arrayToProduct);
            $data = $repository->updateOneProd(htmlspecialchars($_POST['idToUpdate']), $product);
            
            if($data){
            
                $success = ['message' => 'Update OK', 'href' => "./index.php?action=admin", 'lien' => "Retourner à l'admin"];
                $succes = new Success($success);
                $succes->manageSuccess();
            } else {
                $arrayFailed = ['message' =>'Erreur', 'href' => './index.php?action=erase-update-product', 'lien' => 'Réessayer', 'type' => 'other'];
                $erreur = new MyError($arrayFailed);
                $erreur->manageFailed();

            }
        } else {
            $arrayFailed = ['message' =>'Veuillez vous connecter', 'href' => './index.php?action=connect', 'lien' => 'Réessayer', 'type' => 'other'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }
    }
}