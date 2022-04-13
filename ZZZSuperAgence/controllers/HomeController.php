<?php
require_once './views/HomeView.php';
require_once './service/Utils.php';
require_once './service/Authenticator.php';

class HomeController {
    
     public function __construct()
     {
        $this->utils = new Utils();
        $this->view = new HomeView();
     }
    
    //Renvoie accueil
     public function index(): void
     {
       echo $this->view->viewIndex();
     }
    //renvoie page RGPD
     public function RGPD(): void
     {
        echo $this->view->viewRGPD();
     }
    
    
    //renvoie vue a-propos.html
    public function aPropos(): void
     {
        echo $this->view->viewAPropos();
     }
    
    //renvoie la page contact
     public function windowImage(): void
     {
        echo $this->view->viewWindowImage();
     }
    
}