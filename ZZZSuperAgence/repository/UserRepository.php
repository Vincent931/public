<?php
require_once './service/AbstractRepository.php';
class UserRepository extends AbstractRepository {
    /**
     * @param $email string
     * @param $password string
     * @param $redirect string
     */
     public function fetchUser($email , $password) :array
     {
        
        $this->query = "SELECT name, first_name, email, password, role, DATE_FORMAT(created_at, '%d/%m/%Y \à %H:%i:%S') AS dateCr, DATE_FORMAT(updated_at, '%d/%m/%Y \à %H:%i:%S') AS dateUp FROM users WHERE email = :email";
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
     * 
     * @param $user class
     * @param $password string
     */
    public function insertUser($user, $variables): bool
    {
        
        // on insert le user venu du formulaire inscript.html
        $this->query = "INSERT INTO users(name, first_name, email, password, role, created_at, updated_at) VALUES(:name, :first_name, :email, :password, :role, NOW() , NOW())";
        
        try {
            $query = $this->connection->prepare($this->query);
            if ($query) {
                $query->bindParam(":name", $user->name);
                $query->bindParam(":first_name", $user->firstName);
                $query->bindParam(":email", $user->email);
                $query->bindParam(":password", $variables[0]);
                $query->bindParam(":role", $variables[1]);
                $data = $query->execute();
                return($data);
                die();
            }
        } catch (Exception $e) {

                $message = $e;
                $href = "./index.php?action=inscription";
                $lien = "Réessayer";
                $controller = new HomeController();
                $controller->showError($message, $href, $lien);
                die();
        }
    }
}
