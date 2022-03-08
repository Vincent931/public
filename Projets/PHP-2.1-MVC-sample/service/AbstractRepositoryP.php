<?php 
abstract class AbstractRepositoryP
{
    protected $connection;
    protected $query;

    public function __construct()
    {
        define('SERVER', "db.3wa.io");
        define('USER', "vincentnguyen");
        define('PASSWORD', "688bdb47722bda92a8d43bfc2056efb0");
        define('BASE', "vincentnguyen_general");
        
        /**
         * instanciation d'un nouvel objet PDO
         * connexion au serveur et test
         */
        try {
            $this->connection = new PDO("mysql:host=" . SERVER . ";dbname=" . BASE, USER, PASSWORD);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        /*
        * forcer l'encodage de PDO
        */
        $this->connection->exec("SET CHARACTER SET utf8");
    }
}
?>