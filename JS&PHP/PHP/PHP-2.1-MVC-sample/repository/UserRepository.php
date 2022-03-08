<?php
require './service/AbstractRepository.php';

class UserRepository extends AbstractRepository {
    
    public function fetchUser(){
        
        $this->query = "SELECT * FROM users WHERE id = 1";
        $data = null;
        try {
            $query = $this->connection->query("SELECT * FROM users WHERE id = 1");
            
            if ($query) {
                
                $data = $query->fetchAll(PDO::FETCH_NUM);
            }
        } catch (Exception $e) {
            die($e);
        }
        
        return $data;
    }
    
    public function fetchConnectUser($email, $password){
        
        $this->query = "SELECT * FROM users WHERE email = :email";
        $data = null;
        
        try {
            $query = $this->connection->prepare($this->query);
            if ($query) {
                $query->bindParam(":email", $email);
                $query->execute();
                $data = $query->fetchAll(PDO::FETCH_NUM);
                if($data){
                     $_SESSION['access']=true;
                     header('Location: ./index.php?action=mange');
                } else {
                    $message = "Vous devez entrez des coordonnées correctes ou créer un compte";
                    header('Location: ./index.php?action=connect&message='.$message);
                }
               
            }
        } catch (Exception $e) {
            die($e);
        }
        
        return $data;
    }
}