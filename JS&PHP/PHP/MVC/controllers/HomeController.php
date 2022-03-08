<?php 
include "./models/User.php";
include "./views/HomeView.php";
include "./repository/UserRepository.php";


class HomeController {
    
    public function manger(){
        //si l'utilisateur n'est pas connecté
        if(!isset($_SESSION['access']) OR $_SESSION['access']!=true){
            $this->connectUser();
            die();
        }
        
        $repository = new UserRepository();
        $user = $repository->fetchUser();
        
       $resultSql = [
            [1, "pierre", "waflart@ff.com", "patissier", 27],
            [2, "jess", "lor@dd.com", "boulangere", 98]
        ];
        
            
        $users = [];
        foreach ($resultSql as $result) {
            $user = new User();
            $user->setName($result[1]);
            $user->setEmail($result[2]);
            $users[] = $user;
        }
        
            
        /*$user = new User();
        $user->setName();
        $user->setEmail();*/
        
        $view = new HomeView();
        $view->viewManges($user);
    }
    
    public function dors(){
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
    
    
    
    public function getUser(){
        //si l'utilisateur n'est pas connecté
        if(!isset($_SESSION['access']) OR $_SESSION['access']!=true){
            $this->connectUser();
            die();
        }
        $repository = new UserRepository();
        $results = $repository->fetchUser();
        
        $users = [];
        
        foreach($results as $result){
            $user = new User();
            $user->setName($result[2]);
            $user->setEmail($result[3]);
            $users[] = $user;
        }
        
        $view = new HomeView();
        $view->viewDors($users[0]);
    }
    
    public function connectUser($message=""){
        
        $view = new HomeView();
        $view->connectForm($message);
    }
    
    public function validForm(){
        //route validation du formulaire
        if(!empty ($_POST['email']) AND !empty($_POST['password'])){
          $repository = new UserRepository();
          $repository->fetchConnectUser($_POST['email'], $_POST['password']); 
        }
      
    }
    
}