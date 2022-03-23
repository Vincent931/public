<?php
require_once './service/Utils.php';
require_once './models/User.php';
require_once './models/Template.php';

class UserView {
    public function __construct()
    {
        $this->utils = new Utils();
        $this->user = new User();
    }
    //renvoie connectForm.html
    /**
     * @param $message string
     */
    public function connectForm($message) :void
    {
        
        $temp = new Template();
        $header = $this->utils->searchInc('header');
        $header = $this->utils->setTitle($header, "Vous connecter pour obtenir le meilleur de Super agence");
         $header = $this->utils->setDescription($header, "La page de connexion de Super Agence");
        $bodyUp = $this->utils->searchInc('body-up');
        $body = $this->utils->searchHtml('connectForm');
        $body = $this->utils->addCsrf($body);
        $bodyBottom = $this->utils->searchInc('body-bottom');
        $footer = $this->utils->searchInc('footer');
        
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        $page = $temp->getTemplate();
        $page = str_replace("{message}", $message, $page);
        
        echo $page;
    }
    
    //renvoie inscript.html
    public function inscriptForm() :void
    {
        
        $temp = new Template();
        
        $header = $this->utils->searchInc('header');
        $header = $this->utils->setTitle($header, "Vous inscrire pour obtenir le meilleur de Super Agence");
        $header = $this->utils->setDescription($header, "La page d'inscription de Super Agence");
        $bodyUp = $this->utils->searchInc('body-up');
        $body = $this->utils->searchHtml('inscript');
        $body = $this->utils->addCsrf($body);
        $bodyBottom = $this->utils->searchInc('body-bottom');
        $footer = $this->utils->searchInc('footer');
        
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        $page = $temp->getTemplate();
        
        echo $page;
    }
    public function displayAccount($user) :void
     {
        if ($user->role !== 'admin'){
            $role = "";
        } else if($user->role === 'admin'){
            $role = "Role : admin";
        }
        $temp = new Template();
        $header = $this->utils->searchInc('header');
        $header = $this->utils->setTitle($header, "Votre compte");
        $header = $this->utils->setDescription($header, "La page de compte de Super Agence");
        $bodyUp = $this->utils->searchInc('body-up');
        $body = $this->utils->searchHtml('account');
        $body = $this->utils->setUserContent($body, $user->name, $user->firstName, $user->email, $user->createdAt, $user->updatedAt, $role);
        $bodyBottom = $this->utils->searchInc('body-bottom');
        $footer = $this->utils->searchInc('footer');
        
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        $page = $temp->getTemplate();
        
        echo $page;
    }
}