<?php
require './service/AbstractRepository.php';

class UserRepository extends AbstractRepository {
    
    public function fetchUser($email , $password){
        
        $this->query = "SELECT * FROM users WHERE email = :email AND password = :password";
        $data = null;
        try {
            $query = $this->connection->prepare($this->query);
            $query->bindParam(":email" , $email);
            $query->bindParam(":password" , $password);
            $query->execute();
            $data = $query->fetchAll(PDO::FETCH_OBJ);    //PDO::FETCH_OBJ $data->, PDO::FETCH_ASSOC $data['']
        } catch (Exception $e) {
            die($e);
        }
        return $data;
    }
    
    
    public function insertUser( $name, $first_name, $email,  $password, $password2){
       
        //verifier si user exist! 
        
            //on insert
        $this->query = "INSERT INTO users(name, first_name, email, password, created_at, updated_at) VALUES(:name, :first_name, :email, :password, NOW() , NOW())";

    try {
        $query = $this->connection->prepare($this->query);
        if ($query) {

            $query->bindParam(":name", $name);
            $query->bindParam(":first_name", $first_name);
            $query->bindParam(":email", $email);
            $query->bindParam(":password", $password);
    
            $data = $query->execute();
            var_dump($data);
        }
    }catch (Exception $e) {
            die($e);
        }
    }
}/*

$this->query = "INSERT INTO users(name, first_name, email, password, created_at, updated_at) VALUES(:name, :first_name, :email, :password, NOW() , NOW())";
        
try {
    $query = $this->connection->prepare($this->query);
    if ($query) {
    
        $query->bindParam(":name", $name);
        $query->bindParam(":first_name", $first_name);
        $query->bindParam(":email", $email);
        $query->bindParam(":password", $password);
            
        $data = $query->execute();
        var_dump($data);      
 } catch (Exception $e) {
            die($e);
        }
if($data){
$controller = new HomeController();
    $controller->showSuccess();
}







    public function fetchConnectUser($email, $password){
                
        $this->query = "SELECT * FROM users WHERE email = :email AND password = :password";
        $data = null;
        $success = false;
        try {
            $query = $this->connection->prepare($this->query);
            if ($query) {
                $query->bindParam(":email", $email);
                $query->bindParam(":password", $password);
                $query->execute();
                $data = $query->fetchAll(PDO::FETCH_OBJ);//PDO::FETCH_OBJ $data->, PDO::FETCH_ASSOC $data['']
                if($data){
                    
                    $_SESSION['access'] = true;
                    $controller = new HomeController();
                    
                    if($redirect){
                        
                        $message = "Il semble que votre compte existe déjà";
                        $href = "./index.php?action=connect";
                        $lien = "Se connecter";
                        $controller = new HomeController();
                        $controller->showError($message, $href, $lien);
                        die();
                    }
                    
                    $controller->index();
                    die();
                     
                } else {
                    
                    if($redirect){
                        
                      return $success = true;  
                         
                    }

                    $message = "Il semble que la connexion soit mauvaise...";
                    $href = "./index.php?action=connect";
                    $lien ="Recommencer";
                    $controller = new HomeController();
                    $controller->showError($message, $href, $lien);
                    die();
                }
               
            }
        } catch (Exception $e) {
            die($e);
        }
        
        return $data;
    }
    
    public function insertUser($name, $first_name, $email, $password){

        $redirect = true;
        //verif user email existe ou non
        $this->fetchConnectUser($email, $password, $redirect);
        
        //sinon on insert le user
        $this->query = "INSERT INTO users(name, first_name, email, password, created_at, updated_at) VALUES(:name, :first_name, :email, :password, NOW() , NOW())";
        
        try {
            $query = $this->connection->prepare($this->query);
            if ($query) {
                $query->bindParam(":name", $name);
                $query->bindParam(":first_name", $first_name);
                $query->bindParam(":email", $email);
                $query->bindParam(":password", $password);
            
                $data = $query->execute();
                var_dump($data);      
                if($data){
                
                $message = "Opération OK...";
                $href = "./index.php?action=index";
                $controller = new HomeController;
                $controller->showSuccess($message, $href);
                die();
                
                } else {
                                    
                $message = "Erreur insertion, veuillez contacter l'administrateur ou recommencer...";
                $href = "./index.php?action='inscription";
                $controller = new HomeController;
                $controller->showError($message, $href);
                die();
                }
            }
        } catch (Exception $e) {
            die($e);
        }
    }
    
    public function fetchProd(){
        
        $this->query = "SELECT * FROM produits";
        $data = null;
        try {
            $query = $this->connection->query("SELECT * FROM produits");
            
            if ($query) {
                
                $data = $query->fetchAll(PDO::FETCH_NUM);
            }
        } catch (Exception $e) {
            die($e);
        }
        
        return $data;
    }
}*/
