<?php
require_once "./controllers/HomeController.php";

class Authenticator
{
     private $admin;
     private $user;
     
     /**
      * @params array $admin
      */
     public function setAdmin($admin): void
     {
          $this->admin = $admin;
     }
     /**
      * @return array $this->admin
      */
     public function getAdmin(): ?object
     {
          return $this->admin;
     }
     /**
      * @params array $user
      */
     public function setUser($user): void
     {
          $this->user = $user;
     }
     /**
      * @return array $this->user
      */
     public function getUser(): ?object
     {
          return $this->user;
     }
     /**
      *@params string $user
      * return array $user
      */
     public function authAdmin(string $user)
     {
          $this->recupereUserSession($user);
          
          if($this->getUser() !== null){
                
               if($this->getUser()->getRole() === 'admin'){
                    
                    return $user;
               } else {
                    header('location: ./index.php?action=connect');
               }
          } else {
               header ('Location: ./index.php?action=connect');
          }
     }
      /**
      *@params string $user
      * return array $user
      */
     public function authUser(string $user)
     {
          $this->recupereUserSession($user);
          
          if($this->getUser() !== null){

               if ($this->getUser()->getRole() === 'user' || $this->getUser()->getRole() === 'admin'){
                    return $user;
               } else {
                    header ('Location: ./index.php?action=connect');
               }
          } else {
               header ('Location: ./index.php?action=connect');
          }
     }
     /**
      * @params string $user
      * return json $_SESSION["user"]
      */
     public function addUserInSession(object $user): ?string
     {
          return $_SESSION['user'] = serialize($user);
     }
     /**
      * @params json $user
      * return object $this->getUser()
      */
     public function recupereUserSession(string $user): null|object
     {
          if (isset($_SESSION[$user])){
               $this->setUser(unserialize($_SESSION[$user]));
               
               return $this->getUser();
               
          } else {
               header ('Location: ./index.php?action=connect');
          }
     }
}