<?php
require_once './service/Utils.php';
require_once './models/Product.php';
require_once './models/Template.php';

class ProductView {
     
    public function __construct()
    {
        $this->utils = new Utils();
        $this->product = new Product();
    }
     public int $perPage = 10;
     private int $number;
     private int $pageDown;
     private int $currentPage;
     private int $pageUp;
     private string $html;
     private string $htmlProduct;
     private string $pageConstruct;
     
     //getters et setters
     /**
      * @param $perPage int
      */
     public function setPerPage($perPage)
     {
          
          $this->perPage = $perPage;
     }
     
     /**
      * @return int $this->perPage
      */
      public function getPerPage()
      {
          return $this->perPage;
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
      * @return $this->CurrentPage string
      */
     public function getCurrentPage() :string
     {
          return $this->currentPage;
     }
     
      /**
      * param $CurrentPage string
      */
     public function setCurrentPage($currentPage)
     {
          $this->currentPage = $currentPage;
     }
     
     /**
      * @return $this->pageUp string
      */
     public function getPageUp() :string
     {
          return $this->pageUp;
     }
     
      /**
      * param $pageUp string
      */
     public function setPageUp($pageUp)
     {
          $this->pageUp = $pageUp;
     }
     
     /**
      * @return $this->pageDown string
      */
     public function getPageDown() :string
     {
          return $this->pageDown;
     }
     
      /**
      * param $pageDown string
      */
     public function setPageDown($pageDown)
     {
          $this->pageDown = $pageDown;
     }
     
     /**
      * @param $html string
      */
     public function setHtmlProduct($html)
     {
          
          $this->htmlProduct = $html;
     }
     
     /**
      * return $this->htmlProduct string
      */
      public function getHtmlProduct()
      {
          return $this->htmlProduct;
     }
     
     //fonction remplace les {%%} par les valeurs $this-> et $this->product
     /**
     * @param string $htmlProduct
     * @return string
     */
    public function replaceAll($htmlProduct): string
    {
        
        $htmlProduct = str_replace("{%number%}", $this->getNumber(), $htmlProduct);
        $this->htmlProduct = str_replace("{%id%}", $this->product->getId(), $htmlProduct);
        $this->htmlProduct = str_replace("{%image%}", $this->product->getImgP(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%explication%}", html_entity_decode($this->product->getExplic()), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%type%}", $this->product->getType(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%garage%}", $this->product->getGarage(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%SdB%}", $this->product->getSdb(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%charges%}", $this->product->getCharges(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%notaire%}", $this->product->getNotaire(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%prix%}", $this->product->getPrix(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%ref%}", $this->product->getRef(), $this->htmlProduct);
        
        return $this->htmlProduct;
    }
    
     //
     public function constructHtmlProducts($htmlProduct): string{
          return $this->pageConstruct .= $htmlProduct;
     }
     
     //renvoie le formulaire d'effacement
     /**
      * @param string $html
      * @return string $this->html
      */
     public function replaceAllInViewEraseProduct($html): string
     {
        $htmlProduct = str_replace("{%number%}", $this->getNumber(), $html);
        $this->htmlProduct = str_replace("{%id%}", $this->product->getId(), $htmlProduct);
        $this->htmlProduct = str_replace("{%image%}", $this->product->getImgP(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%explication%}", $this->product->getExplic(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%type%}", $this->product->getType(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%charges%}", $this->product->getCharges(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%notaire%}", $this->product->getNotaire(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%prix%}", $this->product->getPrix(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%ref%}", $this->product->getRef(), $this->htmlProduct);
        //var_dump($this->htmlProduct);die();
        return $this->htmlProduct;
     }
     
     //renvoie le formulaire d'effacement
     /**
      * @param string $html
      * @return string $this->html
      */
     public function replaceInViewConfirmEraseProduct($html): string
     {
        $this->htmlProduct = str_replace("{%id%}", $this->product->getId(), $html);
        $this->htmlProduct = str_replace("{%image%}", $this->product->getImgP(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%explication%}", $this->product->getExplic(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%type%}", $this->product->getType(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%charges%}", $this->product->getCharges(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%notaire%}", $this->product->getNotaire(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%prix%}", $this->product->getPrix(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%ref%}", $this->product->getRef(), $this->htmlProduct);
        //var_dump($this->htmlProduct);die();
        return $this->htmlProduct;
     }
     
     //renvoie le formulaire d'effacement
     /**
      * @param string $html
      * @return string $this->html
      */
     public function replaceInViewUpdateProduct($html): string
     {
        //replace just one
        $this->htmlProduct = str_replace("{%id%}", $this->product->getId(), $html);
        $this->htmlProduct = str_replace("{%ref%}", $this->product->getRef(), $this->htmlProduct);
        //replace selected poly!
        $type = $this->utils->type($this->product->getType());
        $this->htmlProduct = str_replace("{%selecteda1%}", $type[0], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%selecteda2%}", $type[1], $this->htmlProduct);
        $pieces = $this->utils->pieces($this->product->getPieces());
        $this->htmlProduct = str_replace("{%selectedb1%}", $pieces[0], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%selectedb2%}", $pieces[1], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%selectedb3%}", $pieces[2], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%selectedb4%}", $pieces[3], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%selectedb5%}", $pieces[4], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%selectedb6%}", $pieces[5], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%selectedb7%}", $pieces[6], $this->htmlProduct);
        $garage = $this->utils->garage($this->product->getGarage());
        $this->htmlProduct = str_replace("{%selectedc1%}", $garage[0], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%selectedc2%}", $garage[1], $this->htmlProduct);
        $sdb = $this->utils->sdb($this->product->getSdb());
        $this->htmlProduct = str_replace("{%selectedd1%}", $sdb[0], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%selectedd2%}", $sdb[1], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%selectedd3%}", $sdb[2], $this->htmlProduct);
        //replace just one      
        $this->htmlProduct = str_replace("{%prix%}", $this->product->getPrix(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%charges%}", $this->product->getCharges(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%notaire%}", $this->product->getNotaire(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%explic%}", $this->product->getExplic(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%imgP%}", $this->product->getImgP(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%img1%}", $this->product->getImages()['img1'], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%img2%}", $this->product->getImages()['img2'], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%img3%}", $this->product->getImages()['img3'], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%img4%}", $this->product->getImages()['img4'], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%adress1%}", $this->product->getAdress1(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%adress2%}", $this->product->getAdress2(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%ville%}", $this->product->getVille(), $this->htmlProduct);
        $this->htmlProduct = str_replace("{%ZIP%}", $this->product->getZIP(), $this->htmlProduct);
        
        //var_dump($this->htmlProduct);die();
        return $this->htmlProduct;
     }
     
     
    //renvoie la vue product.html
    /**
      * @param string $results
      */
    public function viewProducts($results): void
    {
         //recuperation du GET page pour traitement
         $pageDown = $this->pageDown; $currentPage = $this->currentPage; $pageUp = $this->pageUp;
         
         if($currentPage == 1){
              $pageDown = 1;
         }
        $since = ($currentPage * $this->perPage) - (1 * $this->perPage);
        $to = $currentPage * $this->perPage;
        $htmlToDisplay = ""; $number = 0;
        //boucle de construction objet
        foreach($results as $value){
           $number++;
           if($number > $since && $number <= $to){
           //var_dump($value[1]); die();
           $this->setHtml('product');
           $html = $this->getHtml();
           $this->setNumber($number);
           $this->product->setId($value[0]);
           $this->product->setImgP($value[10]);
           $this->product->setExplic($value[9]);
           $this->product->setType($value[2]);
           $this->product->setGarage($value[4]);
           $this->product->setSdb($value[5]);
           $this->product->setCharges($value[7]);
           $this->product->setNotaire($value[8]);
           $this->product->setPrix($value[6]);
           $this->product->setRef($value[1]);
           $this->setPageDown($pageDown);
           $this->setCurrentPage($currentPage);
           $this->setPageUp($pageUp);
           $content = $this->replaceAll($html);
           $htmlToDisplay .= $content;
           }
        }
        //construction du GET page
        if($currentPage * $this->perPage < $number)
        {
             $pageUp = $currentPage + 1;
        }else {
              $pageUp = $currentPage;
        }
        //construction de la page
        $temp = new Template();
        $header = $this->utils->searchInc('header');
        $header = $this->utils->setTitle($header, "Obtenir la liste des logements, des maisons et appartements de Super Agence");
        $header = $this->utils->setDescription($header,"La page des supers maisons et appartements de Super Agence");
        $bodyUp = $this->utils->searchInc('body-up-products');
        $body = $htmlToDisplay;
        $links = $this->utils->searchInc('pagination');
        $bodyBottom = $this->utils->setLink($links, $pageDown, $currentPage, $pageUp);
        $footer = $this->utils->searchInc('footer');
        $js = $this->utils->setJs('<script src="https://kit.fontawesome.com/80f9a27b0d.js" crossorigin="anonymous"></script>');
        $footer = $this->utils->replaceJs($js, $footer);
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        $page = $temp->getTemplate();
        //affichage de la page
        echo $page;
    }
    //vue ajout de produit
     public function viewAddProduct(): void
     {
        //construction du formulaire
        $temp = new Template();
        $header = $this->utils->searchInc('header-admin');
        $header = $this->utils->setTitle($header, "Administration Super Agence");
        $header = $this->utils->setDescription($header,"La page Ajout de Produits");
        $bodyUp = $this->utils->searchInc('body-up');
        $body = $this->utils->searchHtml('add-product');
        $body =$this->utils->addCsrf($body);
        $bodyBottom = $this->utils->searchInc('body-bottom');
        $footer = "";
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        $page = $temp->getTemplate();
        
        echo $page;
     }
     
     //vue effacement de produit
     public function viewEraseUpdateProduct($results) : void
     {

       //recuperation du GET page pour traitement
       $pageDown = $this->pageDown; $currentPage = $this->currentPage; $pageUp = $this->pageUp;
         
       if($currentPage == 1){
              $pageDown = 1;
        }
        $since = ($currentPage * $this->perPage) - (1 * $this->perPage);
        $to = $currentPage * $this->perPage;
        $htmlToDisplay = ""; $number = 0;
        //boucle de construction objet
        foreach($results as $value){
           $number++;
           
           if($number > $since && $number <= $to){
           $this->setHtml('product-erase-update');
           $html = $this->getHtml();
           $this->setNumber($number);
           $this->product->setId($value[0]);
           $this->product->setImgP($value[10]);
           $this->product->setExplic($value[9]);
           $this->product->setType($value[2]);
           $this->product->setCharges($value[7]);
           $this->product->setNotaire($value[8]);
           $this->product->setPrix($value[6]);
           $this->product->setRef($value[1]);
           $this->setPageDown($pageDown);
           $this->setCurrentPage($currentPage);
           $this->setPageUp($pageUp);
           $content = $this->replaceAllInViewEraseProduct($html);
           $htmlToDisplay .= $content;
           }
        }
          //construction du GET page
        if($currentPage * $this->perPage < $number)
        {
             $pageUp = $currentPage + 1;
        } else {
              $pageUp = $currentPage;
        }
        //Construction du template admin
        $htmlToDisplay = $this->utils->addCsrf($htmlToDisplay);
        $temp = new Template();
        $header = $this->utils->searchInc('header-admin');
        $header = $this->utils->setTitle($header, "Erase Product");
        $header = $this->utils->setDescription($header,"La page d'effacement de produit de Super Agence");
        $bodyUp = $this->utils->searchInc('body-up');
        $body = $htmlToDisplay;
        $links = $this->utils->searchInc('pagination-erase-update');
        $bodyBottom = $this->utils->setLink($links, $pageDown, $currentPage, $pageUp);
        $footer = "";
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        $page = $temp->getTemplate();
        
        echo $page;
     }
     //renvoie la vue confirmation d'effacement de produit
     public function viewConfirmEraseProduct($value): void{
          
           $this->setHtml('erase-one-confirm');
           $html = $this->getHtml();
           $this->product->setId($value[0]);
           $this->product->setImgP($value[10]);
           $this->product->setExplic($value[9]);
           $this->product->setType($value[2]);
           $this->product->setCharges($value[7]);
           $this->product->setNotaire($value[8]);
           $this->product->setPrix($value[6]);
           $this->product->setRef($value[1]);
           $content = $this->replaceInViewConfirmEraseProduct($html);
           $htmlToDisplay = $this->utils->addCsrf($content);
           $temp = new Template();
           $header = $this->utils->searchInc('header-admin');
           $header = $this->utils->setTitle($header, "Erase Product");
           $header = $this->utils->setDescription($header,"La page d'effacement de produit de Super Agence");
           $bodyUp = $this->utils->searchInc('body-up');
           $body = $htmlToDisplay;
           $bodyBottom = $this->utils->searchInc('body-bottom');
           $footer = "";
           $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
           $page = $temp->getTemplate();
             
           echo $page;
     }
     
     //renvoie la vue update produit
     public function viewUpdateProduct($value): void{

          $this->setHtml('update-one-confirm');
          $html = $this->getHtml();
          $this->product->setId($value[0]);
          $this->product->setRef($value[1]);
          $this->product->setType($value[2]);
          $this->product->setPieces($value[3]);
          $this->product->setGarage($value[4]);
          $this->product->setSdB($value[5]);
          $this->product->setPrix($value[6]);
          $this->product->setCharges($value[7]);
          $this->product->setNotaire($value[8]);
          $this->product->setExplic($value[9]);
          $this->product->setImgP($value[10]);
          $this->product->setImages($value[11], $value[12], $value[13], $value[14]);
          $this->product->setAdress1($value[15]);
          $this->product->setAdress2($value[16]);
          $this->product->setVille($value[17]);
          $this->product->setZip($value[18]);
          $content = $this->replaceInViewUpdateProduct($html);
          $htmlToDisplay = $this->utils->addCsrf($content);
          $temp = new Template();
          $header = $this->utils->searchInc('header-admin');
          $header = $this->utils->setTitle($header, "Update Product");
          $header = $this->utils->setDescription($header,"La page de mise a jour de produit de Super Agence");
          $bodyUp = $this->utils->searchInc('body-up');
          $body = $htmlToDisplay;
          $bodyBottom = $this->utils->searchInc('body-bottom');
          $footer = "";
          $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
          $page = $temp->getTemplate();
          
          echo $page;
     }
     
     public function viewOneProduct($product): void
     {
        $html = $this->utils->searchHtml('product-one');
        $this->htmlProduct = str_replace("{%id%}", $product[0], $html);
        $this->htmlProduct = str_replace("{%ref%}", $product[1], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%type%}", $product[2], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%pieces%}", $product[3], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%garage%}", $product[4], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%SdB%}", $product[5], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%prix%}", $product[6], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%charges%}", $product[7], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%notaire%}", $product[8], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%explic%}", $product[9], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%imgP%}", $product[10], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%img1%}", $product[11], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%img2%}", $product[12], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%img3%}", $product[13], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%img4%}", $product[14], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%adress1%}", $product[15], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%adress2%}", $product[16], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%ville%}", $product[17], $this->htmlProduct);
        $this->htmlProduct = str_replace("{%ZIP%}", $product[18], $this->htmlProduct);
        
        $temp = new Template();
        $header = $this->utils->searchInc('header');
        $header = $this->utils->setTitle($header, "Voir le produit Super Agence");
        $header = $this->utils->setDescription($header,"La page de details produit de Super Agence");
        $bodyUp = $this->utils->searchInc('body-up');
        $body = $this->htmlProduct;
        $bodyBottom = $this->utils->searchInc('body-bottom');
        $footer = $this->utils->searchInc('footer');
        $this->utils->setJs('<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>');
        $this->utils->setJs('<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>');
        $this->utils->setJs('<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>');
        $this->utils->setJs('<script src="https://kit.fontawesome.com/80f9a27b0d.js" crossorigin="anonymous"></script>');
        $js = $this->utils->setJs('<script type="text/javascript" src="./public/js/slick2.js"></script>');
        $footer = $this->utils->replaceJs($js, $footer);
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        $page = $temp->getTemplate();
        echo $page;
     }
}