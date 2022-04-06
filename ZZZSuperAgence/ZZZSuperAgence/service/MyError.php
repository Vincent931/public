<?php
require_once "./views/HomeView.php";
require_once "./service/Authenticator.php";

class MyError{
     
     private array $failed;
     
     public function __construct(array $arrayErreur)
     {
          $this->failed = ['message' => $arrayErreur['message'], 'href' => $arrayErreur['href'], 'lien' => $arrayErreur['lien'],'type' => 'other'];
     }
     /**
      * return array $this->failed
      */
     public function getFailed(): array
     {
          return $this->failed;
     }
     /**
      * @params array $arrayErreur
      */
     public function setFailed(array $arrayErreur): void
     {
          $this->failed = $arrayErreur;
     }
     public function manageFailed(): void
     {
        $authenticator = new Authenticator();
        $view = new HomeView();
        $validate = $authenticator->authAdmin('user');
        
        if($this->getFailed()['type'] !== "sql"){
             
             if($validate){//si admin ok
               echo $view->showError($this->getFailed());
             } else {
                  $this->setFailed(['message' => 'Vous n\'avez pas acces à cette partie du site (erreurs)...', 'href' => './index.php?action=accueil', 'lien' =>'Accéder à l\'accueil']);
                  echo $view->showError($this->getFailed());
               }  
             
          }  else {
                  echo $view->showError($this->getFailed());
          }  
     }
}