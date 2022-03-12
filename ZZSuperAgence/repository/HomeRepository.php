<?php
//require './service/AbstractRepository.php';

class HomeRepository extends AbstractRepository {
    
   /* public function fetchProd(){
        
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
    }*/
}
