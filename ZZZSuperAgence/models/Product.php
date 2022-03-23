<?php
class Product{
     private int $id;
     private string $ref;
     private string $type;
     private string $pieces;
     private string $garage;
     private string $sdb;
     private int $prix;
     private int $charges;
     private int $notaire;
     private string $explic;
     private string $img_p;
     private array $images;
     private string $adress1;
     private string $adress2;
     private string $ville;
     private string $ZIP;
     

     /**
      * @param $id int
      */
     public function setId($id)
     {
          
          $this->id = $id;
     }
     
     /**
      * @return int $this->id
      */
      public function getId()
      {
          return $this->id;
     }
     
     /**
      * param $ref string
      */
     public function setRef($ref)
     {
          $this->ref = $ref;
     }
     
     /**
      * @return $this->ref string
      */
     public function getRef() :string
     {
          return $this->ref;
     }
     
     /**
      * param $type string
      */
     public function setType($type)
     {
          $this->type = $type;
     }
     
     /**
      * @return $this->type string
      */
     public function getType() :string
     {
          return $this->type;
     }
     
     /**
      * param $garage string
      */
     public function setPieces($pieces)
     {
          $this->pieces = $pieces;
     }
     
     /**
      * @return $this->pieces string
      */
     public function getPieces() :string
     {
          return $this->pieces;
     }
     
     /**
      * param $garage string
      */
     public function setGarage($garage)
     {
          $this->garage = $garage;
     }
     
     /**
      * @return $this->garage string
      */
     public function getGarage() :string
     {
          return $this->garage;
     }
     
     /**
      * param $SdB string
      */
     public function setSdb($sdb)
     {
          $this->sdb = $sdb;
     }
     
     /**
      * @return $this->sdb string
      */
     public function getSdb() :string
     {
          return $this->sdb;
     }
     
     /**
      * param $montant float
      */
     public function setPrix($prix)
     {
          $this->prix = $prix;
     }
     
     /**
      * @return float
      */
      public function getPrix()
      {
           return $this->prix;
      }

     /**
      * param $charges string
      */
     public function setCharges($charges)
     {
          $this->charges = $charges;
     }
     
     /**
      * @return $this->charges float
      */
     public function getCharges() :string
     {
          return $this->charges;
     }
     
     /**
      * param $notaire string
      */
     public function setNotaire($notaire)
     {
          $this->notaire = $notaire;
     }
     
     /**
      * @return $this->notaire float
      */
     public function getNotaire() :string
     {
          return $this->notaire;
     }
     
     /**
      * param $explication string
      */
     public function setExplic($explic)
     {
          $this->explic = $explic;
     }
     
     /**
      * @return $this->explication string
      */
     public function getExplic() :string
     {
          return $this->explic;
     }
     
     /**
      * param $image_p string
      */
     public function setImgP($imgP)
     {
          $this->imgP = $imgP;
     }
     
     /**
      * @return $this->image_p string
      */
     public function getImgP() :string
     {
          return $this->imgP;
     }
     
     /**
      * param $img1 string
      * param $img2 string
      * param $img3 string
      * param $img4 string
      */
     public function setImages($img1, $img2, $img3, $img4)
     {
          $this->images = ['img1' => $img1, 'img2' => $img2, 'img3' => $img3, 'img4' => $img4];
     }
     
     /**
      * @return $this->imgages array
      */
     public function getImages() :array
     {
          return $this->images;
     }
     
     /**
      * param $adress1 string
      */
     public function setAdress1($adress1)
     {
          $this->adress1 = $adress1;
     }
     
     /**
      * @return $this->adress1 string
      */
     public function getAdress1() :string
     {
          return $this->adress1;
     }

     /**
      * param $adress2 string
      */
     public function setAdress2($adress2)
     {
          $this->adress2 = $adress2;
     }
     
     /**
      * @return $this->adress2 string
      */
     public function getAdress2() :string
     {
          return $this->adress2;
     }
     
     /**
      * param $adress1 string
      */
     public function setVille($ville)
     {
          $this->ville = $ville;
     }
     
     /**
      * @return $this->ville string
      */
     public function getVille() :string
     {
          return $this->ville;
     }
     
     /**
      * param $ville string
      */
     public function setZIP($ZIP)
     {
          $this->ZIP = $ZIP;
     }
     
     /**
      * @return $this->ZIP string
      */
     public function getZIP() :string
     {
          return $this->ZIP;
     }
}