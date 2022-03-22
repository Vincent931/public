<?php
abstract class AbstractRepository
{
    protected $connection;
    protected $query;

    public function __construct()
    {
        define('SERVER',  $_ENV['SERVER']);
        define('USER', $_ENV['USER']);
        define('PASSWORD', $_ENV['PASSWORD']);
        define('BASE', $_ENV['BASE']);

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