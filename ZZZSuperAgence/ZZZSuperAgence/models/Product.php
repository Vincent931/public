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
      * @params int $id
      */
     public function setId(int $id)
     {
          $this->id = $id;
     }
     /**
      * return int $this->id
      */
      public function getId()
      {
          return $this->id;
     }
     /**
      * @params string $ref
      */
     public function setRef(string $ref): void
     {
          $this->ref = $ref;
     }
     /**
      * return string $this->ref
      */
     public function getRef(): string
     {
          return $this->ref;
     }
     /**
      * @params $type string
      */
     public function setType(string $type): void
     {
          $this->type = $type;
     }
     /**
      * return string $this->type
      */
     public function getType(): string
     {
          return $this->type;
     }
     /**
      * @params string $garage
      */
     public function setPieces(string $pieces): void
     {
          $this->pieces = $pieces;
     }
     /**
      * return string $this->pieces
      */
     public function getPieces(): string
     {
          return $this->pieces;
     }
     /**
      * @params string $garage
      */
     public function setGarage(string $garage): void
     {
          $this->garage = $garage;
     }
     /**
      * return string $this->garage
      */
     public function getGarage(): string
     {
          return $this->garage;
     }
     /**
      * @params string $sdb
      */
     public function setSdb(string $sdb): void
     {
          $this->sdb = $sdb;
     }
     /**
      * return string $this->sdb
      */
     public function getSdb(): string
     {
          return $this->sdb;
     }
     /**
      * @params int $prix
      */
     public function setPrix(int $prix): void
     {
          $this->prix = $prix;
     }
     /**
      * return int $this->prix
      */
      public function getPrix(): int
      {
           return $this->prix;
      }
     /**
      * @params int $charges
      */
     public function setCharges(int $charges): void
     {
          $this->charges = $charges;
     }
     /**
      * return int $this->charges
      */
     public function getCharges(): int
     {
          return $this->charges;
     }
     /**
      * @params int $notaire
      */
     public function setNotaire(string $notaire): void
     {
          $this->notaire = $notaire;
     }
     /**
      * return int $this->notaire
      */
     public function getNotaire(): int
     {
          return $this->notaire;
     }
     /**
      * @params string $explic
      */
     public function setExplic(string $explic): void
     {
          $this->explic = $explic;
     }
     /**
      * return string $this->explic
      */
     public function getExplic(): string
     {
          return $this->explic;
     }
     /**
      * @params string $imgP
      */
     public function setImgP(string $imgP): void
     {
          $this->imgP = $imgP;
     }
     /**
      * return string $this->imgP
      */
     public function getImgP(): string
     {
          return $this->imgP;
     }
     /**
      * @params string $img1
      * @params string $img2
      * @params string $img3
      * @params string $img4
      */
     public function setImages(string $img1, string $img2, string $img3, string $img4): void
     {
          $this->images = ['img1' => $img1, 'img2' => $img2, 'img3' => $img3, 'img4' => $img4];
     }
     /**
      * return array $this->imgages
      */
     public function getImages(): array
     {
          return $this->images;
     }
     /**
      * @params string $adress1
      */
     public function setAdress1(string $adress1): void
     {
          $this->adress1 = $adress1;
     }
     /**
      * return string $this->adress1
      */
     public function getAdress1() :string
     {
          return $this->adress1;
     }
     /**
      * @params string $adress2
      */
     public function setAdress2(string $adress2): void
     {
          $this->adress2 = $adress2;
     }
     /**
      * return string $this->adress2
      */
     public function getAdress2(): string
     {
          return $this->adress2;
     }
     /**
      * @params string $ville
      */
     public function setVille(string $ville): void
     {
          $this->ville = $ville;
     }
     
     /**
      * return $this->ville string
      */
     public function getVille(): string
     {
          return $this->ville;
     }
     /**
      * @params int $ZIP
      */
     public function setZIP(int $ZIP): void
     {
          $this->ZIP = $ZIP;
     }
     /**
      * return int $this->ZIP
      */
     public function getZIP(): int
     {
          return $this->ZIP;
     }
     /**
      * @params array $data
      */
     public function addDataFromRepository(array $data): void
     {
          $this->setId($data['id']);
          $this->setRef($data['ref']);
          $this->setType($data['type']);
          $this->setPieces($data['pieces']);
          $this->setGarage($data['garage']);
          $this->setSdb($data['SdB']);
          $this->setPrix($data['prix']);
          $this->setCharges($data['charges']);
          $this->setNotaire($data['notaire']);
          $this->setExplic($data['explic']);
          $this->setImgP($data['img_p']);
          $this->setimages($data['img_1'], $data['img_2'], $data['img_3'], $data['img_4']);
          $this->setAdress1($data['adress1']);
          $this->setAdress2($data['adress2']);
          $this->setVille($data['ville']);
          $this->setZIP($data['ZIP']);
     }
}