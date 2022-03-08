<?php
require './service/AbstractRepositoryP.php';

class ProductRepository extends AbstractRepositoryP {
    
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
}