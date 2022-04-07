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
    //renvoie page succes
    /**
     * @params array $message
     */
     public function success(array $message) :void
     {
        echo $this->view->showSuccess($message);
     }
    
    //renvoie page RGPD
     public function RGPD(): void
     {
        echo $this->view->viewRGPD();
    }
    
    //renvoie la page contact
     public function contact(): void
     {
        echo $this->view->viewcontact();
    }
    
    //TODO include PHPmailer
    public function email(): void
    {
        $email = htmlspecialchars($_POST['email']);
        $body = htmlspecialchars($_POST['content']);
        header("Location: mailto: vincent.nguyen@3wa.io?subject=Sujet&body=De '$email.', contenu : '.$body'");
        die();
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