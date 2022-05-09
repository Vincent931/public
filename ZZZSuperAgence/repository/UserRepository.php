<?php
require_once './service/AbstractRepository.php';
require_once './service/MyError.php';

class UserRepository extends AbstractRepository {
    /**
     * @params string $email
     * return array $data
     */
     public function fetchUser(string $email): array|bool
     {
        $this->query = "SELECT id, name, first_name, email, password, role, DATE_FORMAT(created_at, '%d/%m/%Y \à %H:%i:%S') AS dateCr, DATE_FORMAT(updated_at, '%d/%m/%Y \à %H:%i:%S') AS dateUp FROM users WHERE email = :email";
        $data = null;
        //on verifie que le user existe venu du formulaire connectForm.html
        try {
            $query = $this->connection->prepare($this->query);
            $query->bindParam(":email" , $email);
            $query->execute();
            $data = $query->fetch(PDO::FETCH_ASSOC);//PDO::FETCH_OBJ $data->, PDO::FETCH_ASSOC $data['']
           
        } catch (Exception $e) {
            $arrayFailed = ['message' =>$e, 'href' => './index.php?action=account', 'lien' => 'Retour', 'type' => 'sql'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }

        return $data;
     }
    /**
     * @params array $user
     * @params array $arrayRolePassw
     * return PDOstatement
     */
    public function insertUser(object $user, array $arrayRolePassw): PDOstatement|bool
    {
        
        // on insert le user venu du formulaire inscript.html
        $this->query = "INSERT INTO users(name, first_name, email, password, role, created_at, updated_at) VALUES(:name, :first_name, :email, :password, :role, NOW() , NOW())";
        
        try {
            $query = $this->connection->prepare($this->query);
            if ($query) {
                // Pas normal on doit pouvoir retourner une error
                $query->bindParam(":name", $user->name);
                $query->bindParam(":first_name", $user->firstName);
                $query->bindParam(":email", $user->email);
                $query->bindParam(":password", $arrayRolePassw[0]);
                $query->bindParam(":role", $arrayRolePassw[1]);
                $data = $query->execute();

                return($data);
            }
        } catch (Exception $e) {
            $arrayFailed = ['message' => $e, 'href' => './index.php?action=inscription', 'lien' => 'Réessayer', 'type' => 'sql'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }
    }
}
