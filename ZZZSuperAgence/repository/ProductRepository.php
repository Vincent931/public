<?php
//require './service/AbstractRepository.php';

class ProductRepository extends AbstractRepository
{
    /**
     * @return string
     */
    public function fetchOneProd($id): ?array
    {
        
        $this->request = "SELECT * FROM produits WHERE id=:id";
        $data = null;
        
        try {
            //$query = $this->connection->query("SELECT * FROM produits ORDER BY id DESC");
            $query = $this->connection->prepare($this->request);
            
            if ($query) {
                $query->bindParam(":id", $id);
                $query->execute();
                $data = $query->fetch(PDO::FETCH_NUM);//(PDO::FETCH_NUM);//FETCH_ASSOC=array[], FETCH_OBJ=objet->
            }
        } catch (Exception $e) {
            die($e);
        }
    return ($data);
    }
    
    /**
     * @return string
     */
    public function fetchProd(): ?array
    {
        
        $this->request = "SELECT * FROM produits ORDER BY id DESC";
        $data = null;
        
        try {
            //$query = $this->connection->query("SELECT * FROM produits ORDER BY id DESC");
            $query = $this->connection->query($this->request);
            
            if ($query) {
                $data = $query->fetchAll(PDO::FETCH_NUM);//FETCH_ASSOC=array[], FETCH_OBJ=objet->
            }
        } catch (Exception $e) {
            die($e);
        }
        
    return ($data);
    }
    /**
     * @return bool
     */
    public function insertProduct($product) :bool
    {
         $this->request = 'INSERT INTO produits(ref, type, pieces, garage, SdB, prix, charges, notaire, explic, img_p, img_1, img_2, img_3, img_4, adress1, adress2, ville, ZIP, date) VALUES(:ref, :type, :pieces, :garage, :SdB, :prix, :charges, :notaire, :explic, :img_p, :img_1, :img_2, :img_3, :img_4, :adress1, :adress2, :ville, :ZIP, NOW())';
         
         try {
            $query = $this->connection->prepare($this->request);

                if ($query) {
                    $query->bindParam(":ref", $product->ref);
                    $query->bindParam(":type", $product->type);
                    $query->bindParam(":pieces", $product->pieces);
                    $query->bindParam(":garage", $product->garage);
                    $query->bindParam(":SdB", $product->SdB);
                    $query->bindParam(":prix", $product->prix);
                    $query->bindParam(":charges", $product->charges);
                    $query->bindParam(":notaire", $product->notaire);
                    $query->bindParam(":explic", $product->explic);
                    $query->bindParam(":img_p", $product->imgP);
                    $query->bindParam(":img_1", $product->img1);
                    $query->bindParam(":img_2", $product->img2);
                    $query->bindParam(":img_3", $product->img3);
                    $query->bindParam(":img_4", $product->img4);
                    $query->bindParam(":adress1", $product->adress1);
                    $query->bindParam(":adress2", $product->adress2);
                    $query->bindParam(":ville", $product->ville);
                    $query->bindParam(":ZIP", $product->ZIP);
                    $data = $query->execute();
    
                    if(!$data){
                        $message = "quelquechose s'est mal passé";
                        $href = "./index.php?action=add-product";
                        $lien = "Réessayer";
                        $controller = new UserController();
                        $controller->showError($message, $href, $lien);
                        die();   
                    }
                }
            } catch (Exception $e) {
                $message = $e;
                $href = "./index.php?action=add-product";
                $lien = "Réessayer";
                $controller = new UserController();
                $controller->showError($message, $href, $lien);
                die();
        }
    return($data);
    die();
    }
    
    /**
     * @return bool
     */
    public function deleteProd($id): PDOstatement
    {
        
        $this->request = "DELETE FROM produits WHERE id=:id";
        $data = null;
        
        try {
            //$query = $this->connection->query("SELECT * FROM produits ORDER BY id DESC");
            $query = $this->connection->prepare($this->request);
            
            if ($query) {
                $query->bindParam(":id", $id);
                $query->execute();
            }
        } catch (Exception $e) {
            die($e);
        }
    return ($query);
    }
    
}