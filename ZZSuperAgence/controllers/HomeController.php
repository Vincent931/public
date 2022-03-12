<?php 
//include "./models/User.php";
//include "./views/HomeView.php";
//include "./repository/HomeRepository.php";

class HomeController {
    
    //Renvoie accueil
    public function index() :void{
        $view = new HomeView();
        $view->viewIndex();
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
    */
