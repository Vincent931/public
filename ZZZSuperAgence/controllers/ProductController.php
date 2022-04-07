<?php
require_once './repository/ProductRepository.php';
require_once './views/HomeView.php';
require_once './views/ProductView.php';
require_once './models/Product.php';
require_once './controllers/UserController.php';
require_once './service/Authenticator.php';
require_once './service/MyError.php';
require_once './service/Success.php';

class ProductController {
    
    public function __construct()
    {
        $this->utils = new Utils();
    }
   //renvoie page listing produit  
    public function showProducts(): void
    {
        $view = new ProductView();
        $roomslimit = "T1";
        if(!isset($_GET['page']) || !is_numeric($_GET['page'])){
            $view->setCurrentPage(1);
            $view->setPageDown(0);
            $view->setPageUp(2);
        } else {
            $view->setCurrentPage($_GET['page']);
            $view->setPageDown($_GET['page']-1);
            $view->setPageUp($_GET['page']+1);
            $roomslimit = $_GET['room'];
        }
         if(isset($_POST['rooms'])){
            $roomslimit = htmlspecialchars($_POST['rooms']);
            $view->setCurrentPage(1);
            $view->setPageDown(0);
            $view->setPageUp(2);
            $view->setRoom($roomslimit);
        }
        
        $repository = new ProductRepository();
        $results = $repository->fetchProd();
        $counter = count($results);
        echo $view->viewProducts($results, $roomslimit, $counter);
    }

    public function oneProduct(): void
    {
        $view = new ProductView();
        $viewHome = new HomeView();
        
        if(isset($_GET['secureid']) && is_numeric($_GET['secureid'])){
            $id = htmlspecialchars($_GET['secureid']);
        } else {
            $arrayFailed = ['message' =>'Erreur Grave veuillez contacter l\'administrateur', 'href' => './index.php?action=products', 'lien' => 'Retour', 'type' => 'other'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }
        $url = $_SERVER['HTTP_REFERER'];
        $repository = new ProductRepository();
        $results = $repository->fetchOneProd($id);
        echo $view->viewOneProduct($results, $url);
    }
    
    public function addFavori(): void
    {
        $valid = "";
        $repository = new ProductRepository();
        $idProd=htmlspecialchars($_GET['id']);
        //si user est connecté
        $authenticator = new Authenticator();
        $authenticator->authUser('user');
        $userId = $authenticator->getUser()->getId();
        $number = $repository->countFavoris($userId);
        $number = $number['COUNT( * )'];
        if ($number<=15){
            $valid = $repository->addFavoriInBase($idProd, $userId);
        }
        echo json_encode($valid);
        
    }

   public function favoris(): void
   {
        $repository = new ProductRepository();
        $view = new ProductView();
        //si user est connecté
        $authenticator = new Authenticator();
        $authenticator->authUser('user');
        $email = $authenticator->getUser()->getEmail();
        $data = $repository->fetchFavoris($email);
        echo $view->showFavoris($data);
    }
    
    public function eraseFavoris(): void
    {
        if($_POST['csrf'] !== $_SESSION['csrf']){
                $arrayFailed = ['message' =>'Erreur Grave veuillez contacter l\'administrateur', 'href' => './index.php?action=add-product', 'lien' => 'Réessayer', 'type' => 'other'];
                $erreur = new MyError($arrayFailed);
                echo $erreur->manageFailed();
        }
        $repository = new ProductRepository();
        $idFavori = htmlspecialchars($_POST['id']);
        //si user est connecté
        $authenticator = new Authenticator();
        $authenticator->authUser('user');
        $data = $repository->eraseOneFavoris($idFavori);
        
        if(!$data){
            $arrayFailed = ['message' =>'Erreur', 'href' => './index.php?action=favoris', 'lien' => 'Retour', 'type' => 'other'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        } else {
                $success =['message' => "OK", 'href' => "./index.php?action=favoris", 'lien' => "Retour"];
                $succes = new Success($success);
                $succes->manageSuccess();
        }
    }
}
