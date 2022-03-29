<?php
require_once './views/HomeView.php';
require_once './service/Utils.php';
class HomeController {
    
    public function __construct()
    {
        $this->utils = new Utils();
        $this->view = new HomeView();
    }
    //Renvoie accueil
    public function index(): void
    {
        $this->view->viewIndex();
    }
    //renvoie page admin
    public function admin(): void
    {
        $validate = $this->utils->validateAdmin();
        
        if(!$validate){
            $error = ['error' => "Quelquechose s'est mal passé", 'href' => "index.php?action=accueil", 'lien' => "Retourner à l'accueil"];
            $this->view->showError($error);
        } else {
        $this->view->viewAdmin();
        }
    }
    
    //renvoie page erreur
    /**
     * @param $error array
     */
    public function error(array $error): void
    {
        $this->view->showError($error);
    }
    
    //renvoie page succes
    /**
     * @param $error string
     * @param $href string
     * @param $lien string
     */
     public function success(array $message) :void
     {
        $this->view->showSuccess($message);
     }
    
    //renvoie page RGPD
     public function RGPD(): void
     {
        $this->view->viewRGPD();
    }
    
    //renvoie la page contact
     public function contact(): void
     {
        $this->view->viewcontact();
    }
    
    //TODO include PHPmailer
    public function email()
    {
        $email = htmlspecialchars($_POST['email']);
        $body = htmlspecialchars($_POST['content']);
        header("Location: mailto: vincent.nguyen@3wa.io?subject=Sujet&body=De '$email.', contenu : '.$body'");
        die();
    }
    
    //renvoie vue a-propos.html
    public function aPropos()
    {
        $this->view->viewAPropos();
    }
    
    //renvoie la page contact
     public function windowImage(): void
     {
        $this->view->viewWindowImage();
    }
    
}