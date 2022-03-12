<?php
//require './service/AbstractRepository.php';

class UserRepository extends AbstractRepository {
    /**
     * @param $email string
     * @param $password string
     * @param $redirect string
     */
     public function fetchUser($email , $password) :array
     {
        
        $this->query = "SELECT * FROM users WHERE email = :email";
        $data = null;
        //on verifie que le user existe venu du formulaire connectForm.html
        try {
            $query = $this->connection->prepare($this->query);
            $query->bindParam(":email" , $email);
            $query->execute();
            $data = $query->fetch(PDO::FETCH_ASSOC);    //PDO::FETCH_OBJ $data->, PDO::FETCH_ASSOC $data['']
           
        } catch (Exception $e) {
                $message = $e;
                $href = "./index.php?action=connect";
                $lien = "Réessayer";
                $controller = new UserController();
                $controller->showError($message, $href, $lien);
                die();
        }
        return $data;
     } 
    /**
     * @param $name string
     * @param $first_name string
     * @param $email string
     * @param $password string
     */
    public function insertUser($name, $first_name, $email, $password): bool
    {
        
        $password = password_hash($password, PASSWORD_BCRYPT);
        // on insert le user venu du formulaire inscript.html
        $this->query = "INSERT INTO users(name, first_name, email, password, created_at, updated_at) VALUES(:name, :first_name, :email, :password, NOW() , NOW())";
        
        try {
            $query = $this->connection->prepare($this->query);
            
            if ($query) {
                $query->bindParam(":name", $name);
                $query->bindParam(":first_name", $first_name);
                $query->bindParam(":email", $email);
                $query->bindParam(":password", $password);
                $data = $query->execute();
                
                return($data);
                die();
            }
        } catch (Exception $e) {

                $message = $e;
                $href = "./index.php?action=inscription";
                $lien = "Réessayer";
                $controller = new UserController();
                $controller->showError($message, $href, $lien);
                die();
        }
    }
}
