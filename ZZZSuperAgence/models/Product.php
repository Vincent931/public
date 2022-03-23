<?php
class Product{
     public int $id;
     public string $ref;
     public string $type;
     public string $pieces;
     public string $garage;
     public int $SdB;
     public int $prix;
     public int $charges;
     public int $notaire;
     public string $explic;
     public string $img_p;
     public string $img_1;
     public string $img_2;
     public string $img_3;
     public string $img_4;
     public string $adress1;
     public string $adress2;
     public string $ville;
     public string $ZIP;
     

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
     public function setSdB($SdB)
     {
          $this->SdB = $SdB;
     }
     
     /**
      * @return $this->SdB int
      */
     public function getSdB() :string
     {
          return $this->SdB;
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
          return $this->img_p;
     }
     
     /**
      * param $image1 string
      */
     public function setImg1($img1)
     {
          $this->img1 = $img1;
     }
     
     /**
      * @return $this->img1 string
      */
     public function getImg1() :string
     {
          return $this->img1;
     }
     
     /**
      * param $img2 string
      */
     public function setImg2($img2)
     {
          $this->img2 = $img2;
     }
     
     /**
      * @return $this->img2 string
      */
     public function getImg2() :string
     {
          return $this->img2;
     }
     
     /**
      * param $img3 string
      */
     public function setImg3($img3)
     {
          $this->img3 = $img3;
     }
     
     /**
      * @return $this->img3 string
      */
     public function getImg3() :string
     {
          return $this->img3;
     }
     
     /**
      * param $img4 string
      */
     public function setImg4($img4)
     {
          $this->img4 = $img4;
     }
     
     /**
      * @return $this->img4 string
      */
     public function getImg4() :string
     {
          return $this->img4;
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