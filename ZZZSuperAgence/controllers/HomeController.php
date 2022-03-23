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
            $error = "Quelquechose s'est mal passé";
            $href = "index.php?action=accueil";
            $lien = "Retourner à l'accueil";
            $this->view->showError($error, $href, $lien);
        } else {
        $this->view->viewAdmin();
        }
    }
    //renvoie page erreur
    /**
     * @param $error string
     * @param $href string
     * @param $lien string
     */
    public function showError($error, $href, $lien): void
    {
        $this->view->showError($error, $href, $lien);
    }
    
    //renvoie page succes
    /**
     * @param $error string
     * @param $href string
     * @param $lien string
     */
     public function showSuccess($message, $href, $lien) :void
     {
        $this->view->showSuccess($message, $href, $lien);
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
        $body = htmlspecialchars($_POST['email']);
        header("Location: mailto: vincent.nguyen@3wa.io?subject=Sujet&body='.$body'");
        die();
    }
    
    //renvoie vue a-propos.html
    public function aPropos()
    {
        $this->view->viewAPropos();
    }
    
}