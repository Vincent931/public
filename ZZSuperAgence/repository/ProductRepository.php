<?php
//require './service/AbstractRepository.php';

class ProductRepository extends AbstractRepository {
    /**
     * @return string
     */
    public function fetchProd(): ?array{
        
        $this->query = "SELECT * FROM produits";
        $data = null;
        
        try {
            $query = $this->connection->query("SELECT * FROM produits ORDER BY id DESC");
            
            if ($query) {
                $data = $query->fetchAll(PDO::FETCH_NUM);
            }
        } catch (Exception $e) {
            die($e);
        }
        
    return ($data);
    }
}
