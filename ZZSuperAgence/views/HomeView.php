<?php 
//require './service/AbstractView.php';
//require './models/Template.php';
//require './models/ProductsView.php';

class HomeView {
    public function __construct()
    {
        $this->products = new ProductsView();
        $this->utils = new Utils();
    }
    //renvoie la vue product.html
    public function viewProducts($results) :void
    {
        $htmlToDisplay = ""; $number = 0;
        foreach($results as $value){
           //var_dump($value[1]); die();
           $this->products->setHtml('product');
           $html = $this->products->getHtml();
           $this->products->setNumber($number);
           $this->products->setId($value[0]);
           $this->products->setImage($value[10]);
           $this->products->setExplication($value[9]);
           $this->products->setType($value[2]);
           $this->products->setGarage($value[4]);
           $this->products->setSdB($value[5]);
           $this->products->setCharges($value[7]);
           $this->products->setNotaire($value[8]);
           $this->products->setMontant($value[6]);
           $this->products->setRef($value[1]);
           
           $content = $this->products->replaceAll($html);
           //var_dump($content); die();
           $htmlToDisplay .= $content;
        }
          //var_dump($html);die();
        $temp = new Template();
        
        $header = $this->utils->searchInc('header');
        $header = $this->utils->setTitle($header, "Obtenir la liste des logements, des maisons et appartements de Super Agence");
       
        $header = $this->utils->setDescription($header,"La page des supers maisons et appartements de Super Agence");
        $bodyUp = $this->utils->searchInc('body-up-products');
        $body = $htmlToDisplay;
        $bodyBottom = $this->utils->searchInc('pagination');
        $footer = $this->utils->searchInc('footer');
        
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        $page = $temp->getTemplate();
        
        echo $page;
    }
    
    //renvoie la vue index.html
    public function viewIndex() :void
    {
        
        $temp = new Template();
        
        $header = $this->utils->searchInc('header');
        $header = $this->utils->setTitle($header, "Une Agence à proximité, vouloir le meilleur pour se loger");
         $header = $this->utils->setDescription($header, "Un exemple de site construit par Vincent Nguyen, Développeur");
        $bodyUp = $this->utils->searchInc('body-up');
        $body = $this->utils->searchHtml('index');
        $bodyBottom = $this->utils->searchInc('body-bottom');
        $footer = $this->utils->searchInc('footer');
        
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        
        $page = $temp->getTemplate();
        echo $page;
    }
    
    //renvoie connectForm.html
    /**
     * @param $message string
     */
    public function connectForm($message) :void
    {
        
        $temp = new Template();
        
        $header = $this->utils->searchInc('header');
        $header = $this->utils->setTitle($header, "Vous connecter pour obtenir le meilleur de Super agence");
         $header = $this->utils->setDescription($header, "La page de connexion de Super Agence");
        $bodyUp = $this->utils->searchInc('body-up');
        $body = $this->utils->searchHtml('connectForm');
        $bodyBottom = $this->utils->searchInc('body-bottom');
        $footer = $this->utils->searchInc('footer');
        
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        $page = $temp->getTemplate();
        $page = str_replace("{message}", $message, $page);
        
        echo $page;
    }
    
    //renvoie inscript.html
    public function inscriptForm() :void
    {
        
        $temp = new Template();
        
        $header = $this->utils->searchInc('header');
        $header = $this->utils->setTitle($header, "Vous inscrire pour obtenir le meilleur de Super Agence");
         $header = $this->utils->setDescription($header, "La page d'inscription de Super Agence");
        $bodyUp = $this->utils->searchInc('body-up');
        $body = $this->utils->searchHtml('inscript');
        $bodyBottom = $this->utils->searchInc('body-bottom');
        $footer = $this->utils->searchInc('footer');
        
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        $page = $temp->getTemplate();
        
        echo $page;
    }
    
    //renvoie error
    /**
     * @param $error string
     * @param $href string
     * @param $lien string
     */
    public function showError($error, $href, $lien) :void
    {
        
        $temp = new Template();
        
        $header = $this->utils->searchInc('header');
        $header = $this->utils->setTitle($header, "Une Erreur s'est produite");
         $header = $this->utils->setDescription($header, "La Page d'erreur vous informe que qulequechose s'est mal passé");
        $bodyUp = $this->utils->searchInc('body-up');
        $body = '<main><div class="error-message"><h3 class="h3-error-message">'.$error.'</h3><br><a href="'.$href.'">'.$lien.'</a></div></main>';
        $bodyBottom = $this->utils->searchInc('body-bottom');
        $footer = $this->utils->searchInc('footer');
        
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        $page = $temp->getTemplate();
        
        echo $page;
    }
    
    //renvoie success
    /**
     * @param $message string
     * @param $href string
     * @param $lien string
     */
    public function showSuccess($message, $href, $lien) :void
    {
         
        $temp = new Template();
        
        $header = $this->utils->searchInc('header');
        $header = $this->utils->setTitle($header, "La requête a été initié avec succès");
         $header = $this->utils->setDescription($header, "Super Agence vous informe du succès de la requête");
        $bodyUp = $this->utils->searchInc('body-up');
        
        $body = '<main><div class="success-message"><h3 class="h3-succes-message">'.$message.'</h3><br><a href="'.$href.'">'.$lien.'</a></div></main>';
        
        $bodyBottom = $this->utils->searchInc('body-bottom');
        $footer = $this->utils->searchInc('footer');
         
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        $page = $temp->getTemplate();
        
        echo $page;
    }
     public function displayAccount() :void
     {
        
        $temp = new Template();
        
        $header = $this->utils->searchInc('header');
        $header = $this->utils->setTitle($header, "Votre compte");
         $header = $this->utils->setDescription($header, "La page de compte de Super Agence");
        $bodyUp = $this->utils->searchInc('body-up');
        $body = $this->utils->searchHtml('account');
        $bodyBottom = $this->utils->searchInc('body-bottom');
        $footer = $this->utils->searchInc('footer');
        
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        $page = $temp->getTemplate();
        
        echo $page;
    }
}
/*public function viewManges($data){
        $page = $this->searchHtml('mange');
        $page = str_replace("{userName}", $data->getName(), $page);
        echo $page;
}*/