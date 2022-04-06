<?php
require_once './service/AbstractRepository.php';
require_once './service/MyError.php';

class ProductRepository extends AbstractRepository
{
    /**
     * @params int $id
     * @return array $data
     */
    public function fetchOneProd(int $id): ?array
    {
        $this->request = "SELECT * FROM produits WHERE id=:id";
        $data = null;
        
        try {
            //$query = $this->connection->query("SELECT * FROM produits ORDER BY id DESC");
            $query = $this->connection->prepare($this->request);
            
            if ($query){
                $query->bindParam(":id", $id);
                $query->execute();
                $data = $query->fetch(PDO::FETCH_ASSOC);//(PDO::FETCH_NUM);//FETCH_ASSOC=array[], FETCH_OBJ=objet->
            }
        } catch (Exception $e) {
            $arrayFailed = ['message' =>$e, 'href' => './index.php?action=products', 'lien' => 'Retour', 'type' => 'sql'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }

    return ($data);
    }
    /**
     * @return array $data
     */
    public function fetchProd(): ?array
    {
        
        $this->request = "SELECT * FROM produits ORDER BY id DESC";
        $data = null;
        
        try {
            $query = $this->connection->query($this->request);
            
            if ($query){
                $data = $query->fetchAll(PDO::FETCH_ASSOC);//FETCH_ASSOC=array[], FETCH_OBJ=objet->
            }
        } catch (Exception $e) {
            $arrayFailed = ['message' =>$e, 'href' => './index.php?action=products', 'lien' => 'Retour', 'type' => 'sql'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }

        return $data;
    }
    /**
     * @params array $product
     * @return PDOstatement
     */
    public function insertProduct(object $product): PDOstatement|bool
    {
         $this->request = 'INSERT INTO produits(ref, type, pieces, garage, SdB, prix, charges, notaire, explic, img_p, img_1, img_2, img_3, img_4, adress1, adress2, ville, ZIP, date) VALUES(:ref, :type, :pieces, :garage, :SdB, :prix, :charges, :notaire, :explic, :img_p, :img_1, :img_2, :img_3, :img_4, :adress1, :adress2, :ville, :ZIP, NOW())';
         
         try {
            $query = $this->connection->prepare($this->request);
            
                if ($query){
                    $query->bindValue(":ref", $product->getRef());
                    $query->bindValue(":type", $product->getType());
                    $query->bindValue(":pieces", $product->getPieces());
                    $query->bindValue(":garage",$product->getGarage());
                    $query->bindValue(":SdB", $product->getSdb());
                    $query->bindValue(":prix", $product->getPrix());
                    $query->bindValue(":charges", $product->getCharges());
                    $query->bindValue(":notaire", $product->getNotaire());
                    $query->bindValue(":explic",$product->getExplic());
                    $query->bindValue(":img_p", $product->getImgP());
                    $query->bindValue(":img_1", $product->getImages()['img1']);
                    $query->bindValue(":img_2", $product->getImages()['img2']);
                    $query->bindValue(":img_3", $product->getImages()['img3']);
                    $query->bindValue(":img_4", $product->getImages()['img4']);
                    $query->bindValue(":adress1", $product->getAdress1());
                    $query->bindValue(":adress2", $product->getAdress2());
                    $query->bindValue(":ville", $product->getVille());
                    $query->bindValue(":ZIP", $product->getZIP());
                    $data = $query->execute();
                }
            } catch (Exception $e) {
                $arrayFailed = ['message' =>$e, 'href' => './index.php?action=add-product', 'lien' => 'Réessayer', 'type' => 'sql'];
                $erreur = new MyError($arrayFailed);
                $erreur->manageFailed();
            }

        return($data);
    }
    /**
     * @params int $id
     * @return PDOstatement
     */
    public function deleteProd(int $id): PDOstatement|bool
    {
        
        $this->request = "DELETE FROM produits WHERE id=:id";
        $data = null;
        
        try {
            $query = $this->connection->prepare($this->request);
            
            if ($query){
                $query->bindParam(":id", $id);
                $query->execute();
            }
        } catch (Exception $e) {
            $arrayFailed = ['message' =>$e, 'href' => './index.php?action=erase-update-product', 'lien' => 'Réessayer', 'type' => 'sql'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }

    return $query;
    }
    /**
     * @params int $id
     * @params array $product
     * @return PDOstatement
     */
    public function updateOneProd(int $id, object $product): PDOstatement|bool
    {
        $this->request = "UPDATE produits SET ref=:ref, type=:type, pieces=:pieces, garage=:garage, SdB=:SdB, prix=:prix, charges=:charges, notaire=:notaire, explic=:explic, img_p=:img_p, img_1=:img_1, img_2=:img_2, img_3=:img_3, img_4=:img_4, adress1=:adress1, adress2=:adress2, ville=:ville, ZIP=:ZIP WHERE id=:id";
        
        try {
            $query = $this->connection->prepare($this->request);

            if ($query){
                $query->bindValue(":ref", $product->getRef());
                $query->bindValue(":type",$product->getType());
                $query->bindValue(":pieces", $product->getPieces());
                $query->bindValue(":garage",$product->getGarage());
                $query->bindValue(":SdB", $product->getSdb());
                $query->bindValue(":prix", $product->getPrix());
                $query->bindValue(":charges", $product->getCharges());
                $query->bindValue(":notaire", $product->getNotaire());
                $query->bindValue(":explic",$product->getExplic());
                $query->bindValue(":img_p", $product->getImgP());
                $query->bindValue(":img_1", $product->getImages()['img1']);
                $query->bindValue(":img_2", $product->getImages()['img2']);
                $query->bindValue(":img_3", $product->getImages()['img3']);
                $query->bindValue(":img_4", $product->getImages()['img4']);
                $query->bindValue(":adress1",  $product->getAdress1());
                $query->bindValue(":adress2", $product->getAdress2());
                $query->bindValue(":ville", $product->getVille());
                $query->bindValue(":ZIP", $product->getZIP());
            	$query->bindValue(":id", $id);
                $query->execute();
            }
        } catch (Exception $e) {
            $arrayFailed = ['message' =>$e, 'href' => './index.php?action=erase-update-product', 'lien' => 'Réessayer', 'type' => 'sql'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }

    return ($query);
    }
    /**
     * @params int $idProd
     * @params int $userId
     * @return PDOstatement
     */
    public function addFavoriInBase(int $idProd, int $userId): PDOstatement|bool
    {
        $this->request = "INSERT INTO favoris(id_product, user_id) VALUES(:id_product, :user_id)";
        $data = null;
        
        try {
            $query = $this->connection->prepare($this->request);
            
            if ($query){
                $query->bindParam(":id_product", $idProd);
                $query->bindParam(":user_id", $userId);
                $data = $query->execute();
            }
        } catch (Exception $e) {
            $arrayFailed = ['message' => $e, 'href' => './index.php?action=favoris', 'lien' => 'Retour', 'type' => 'sql'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }

    return $data;
    }
    /**
     * @params int userId
     * @return array $data
     */
    public function fetchFavoris(string $userId): array
    {
        $this->request = "SELECT * FROM produits JOIN favoris ON produits.id = favoris.id_product JOIN users ON favoris.user_id = users.id  WHERE users.email = :user";
        $data = null;
        
        try {
            $query = $this->connection->prepare($this->request);
            
            if ($query){
                $query->bindParam(":user", $userId);
                $query->execute();
                $data = $query->fetchAll(PDO::FETCH_ASSOC);
                
            }
        } catch (Exception $e) {
            $arrayFailed = ['message' => $e, 'href' => './index.php?action=favoris', 'lien' => 'Retour', 'type' => 'sql'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }

    return $data;
    }
    /**
     * @params int idFavori
     * @return PDOstatement
     */
    public function eraseOneFavoris(int $idFavori): PDOstatement|bool
    {
        
        $this->request = "DELETE FROM favoris WHERE id_product=:id";
        $data = null;
        
        try {
            $query = $this->connection->prepare($this->request);
            
            if ($query){
                $query->bindParam(":id", $idFavori);
                $data = $query->execute();
            }
        } catch (Exception $e) {
            $arrayFailed = ['message' => $e, 'href' => './index.php?action=favoris', 'lien' => 'Retour', 'type' => 'sql'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }

    return $data;
    }
    /**
     * @params int $idUser
     * @return array $data
     */
    public function countFavoris(int $idUser): array
    {
        
        $this->request = "SELECT COUNT( * ) FROM favoris INNER JOIN users ON favoris.user_id = users.id WHERE users.id = :id";
        $data = null;
        
        try {
            $query = $this->connection->prepare($this->request);
            
            if ($query){
                $query->bindParam(":id", $idUser);
                $data = $query->execute();
                $data =$query->fetch(PDO::FETCH_ASSOC);
            }
        } catch (Exception $e) {
           $arrayFailed = ['message' => $e, 'href' => './index.php?action=favoris', 'lien' => 'Retour', 'type' => 'sql'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }

    return $data;
    }
    
}