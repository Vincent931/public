<?php
include "./view/HomeView.php";
include "./repository/UserRepository.php";


class HomeController {
    /*public function __construct(){
        $this->$view = new HomeView();
    }*/
    public function account(){
        if(!isset($_SESSION['access']) OR $_SESSION['access']!=true){
            $this->login();
            die();
        }else{
            $view = new HomeView();
            $view->viewAccount();
        }
    }
    
    public function index(){
        $view = new HomeView();
        $view->viewIndex();
    }
    
    public function login(){
        $view = new HomeView();
        $view->viewLogin();
    }
    
    public function product(){
        $view = new HomeView();
        $view->viewProduct();
    }
    
    public function shop(){
        $view = new HomeView();
        $view->viewShop();
    }
    
    public function renduForm(){
        $repository = new UserRepository();
        $data = $repository->fetchUser($_POST['email'] , $_POST['password']);
        if ($data) {
            $_SESSION['access'] = true;
        }
        $view = new HomeView();
        $view->showSucces();
    }
    
      public function renduForm2(){
        $view = new HomeView();
        $repository = new UserRepository();
        $data = $repository->insertUser($_POST['name'], $_POST['first_name'], $_POST['email'] , $_POST['password'], $_POST['password2']);
         //var_dump($data);
        if ($data) {
            
            $view->showError();  
        }else{
            $view->showSucces();
        }
    }


    public function register(){
        
        $view = new HomeView();
        $view->viewRegister();
        
    }
}
   
 /*  public function dors(){
        //si l'utilisateur n'est pas connecté
        if(!isset($_SESSION['access']) OR $_SESSION['access']!=true){
            $this->connectUser();
            die();
        }
        // J'appelle la data
        $repository = new UserRepository();
        // J'update la data dans un model
        $user = $repository->fetchUser();
        
        // je passe le model à la vue et je l'affiche
        $view = new HomeView();
        $view->viewDors($user);
    }
    //si l'utilisateur n'est pas connecté
        if(!isset($_SESSION['access']) OR $_SESSION['access'] != true){
            
            $this->connectUser();
            die();
        }
    */