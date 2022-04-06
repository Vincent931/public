<?php
require_once "./views/HomeView.php";
require_once "./service/Authenticator.php";

class Success{
     
     private array $success;
      
     public function __construct(array $success){
          $this->success = ['message' => $success['message'], 'href' => $success['href'], 'lien' => $success['lien']];
     }
     /**
      * return array $this->success
      */
     public function getSuccess(): array
     {
          return $this->success;
     }
     /**
      * @params array $success
      */
     public function setSuccess(array $success): void
     {
          $this->success = $success;
     }
     public function manageSuccess(): void
     {
          $view = new HomeView();
          echo $view->showSuccess($this->getSuccess());
     }
}