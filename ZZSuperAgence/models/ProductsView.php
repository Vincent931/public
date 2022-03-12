<?php 
class ProductsView{

     public function __construct()
    {
        $this->utils = new Utils();
    }
     public int $perPage = 10;
     private string $html;
     private int $number;
     private int $id;
     private string $image;
     private string $explication;
     private string $type;
     private string $garage;
     private int $SdB;
     private int $charges;
     private int $notaire;
     private int $montant;
     private string $ref;
     private string $htmlProduct;
     private string $pageConstruct;

     /**
      * @param $filename string
      */
     public function setPerPage($perPage)
     {
          
          $this->perPage = $perPage;
     }
     
     /**
      * return $this->html string
      */
      public function getPerPage()
      {
          return $this->perPage;
     }

     /**
      * @param $filename string
      */
     public function setHtml($fileName)
     {
          
          $this->html = $this->utils->searchInc($fileName);
     }
     
     /**
      * return $this->html string
      */
      public function getHtml()
      {
          return $this->html;
     }
     
     /**
      * @param $number int
      */
     public function setNumber($number)
     {
          
          $this->number = $number;
     }
     
     /**
      * @return int $this->number
      */
      public function getNumber()
      {
          return $this->number;
     }
     
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
      * param $image string
      */
     public function setImage($image)
     {
          $this->image = $image;
     }
     
     /**
      * @return $this->image string
      */
     public function getImage() :string
     {
          return $this->image;
     }
     
     
     /**
      * param $explication string
      */
     public function setExplication($explication)
     {
          $this->explication = $explication;
     }
     
     /**
      * @return $this->explication string
      */
     public function getExplication() :string
     {
          return $this->explication;
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
      * param $montant float
      */
     public function setMontant($montant)
     {
          $this->montant = $montant;
     }
     
     /**
      * @return float
      */
      public function getMontant()
      {
           return $this->montant;
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
     * @param string $htmlProduct
     * @param string $image
     * @param string $explication
     * @param string $type
     * @param string $garage
     * @param string $SdB
     * @param float $charges
     * @param float $notaire
     * @param float $prix
     * @param $ref
     * @return string
     */
    public function replaceAll($htmlProduct){
        
        $this->htmlProduct = str_replace("{%number%}", $this->number, $htmlProduct);
        $this->htmlProduct = str_replace("{%id%}", $this->id, $this->htmlProduct);
        $this->htmlProduct = str_replace("{%image%}", $this->image, $this->htmlProduct);
        $this->htmlProduct = str_replace("{%explication%}", $this->explication, $this->htmlProduct);
        $this->htmlProduct = str_replace("{%type%}", $this->type, $this->htmlProduct);
        $this->htmlProduct = str_replace("{%garage%}", $this->garage, $this->htmlProduct);
        $this->htmlProduct = str_replace("{%SdB%}", $this->SdB, $this->htmlProduct);
        $this->htmlProduct = str_replace("{%charges%}", $this->charges, $this->htmlProduct);
        $this->htmlProduct = str_replace("{%notaire%}", $this->notaire, $this->htmlProduct);
        $this->htmlProduct = str_replace("{%prix%}", $this->montant, $this->htmlProduct);
        $this->htmlProduct = str_replace("{%ref%}", $this->ref, $this->htmlProduct);
        
        //var_dump($this->htmlProduct);die();
        return $this->htmlProduct;
    }
    
     //a utiliser dans la boucle
     public function constructHtmlProducts($htmlProduct){
          return $this->pageConstruct .= $htmlProduct;
     }
}