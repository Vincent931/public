<?php 
//require './service/AbstractView.php';
//require './models/Template.php';
//require './models/ProductsView.php';

class HomeView {
    public function __construct()
    {
        $this->utils = new Utils();
    }
    //renvoie la vue index.html
    public function viewIndex(): void
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
    
    //renvoie error
    /**
     * @param $error string
     * @param $href string
     * @param $lien string
     */
    public function showError($error, $href, $lien): void
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
    public function showSuccess($message, $href, $lien): void
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

     public function viewAdmin() :void
    {
        
        $temp = new Template();
        
        $header = $this->utils->searchInc('header-admin');
        $header = $this->utils->setTitle($header, "Administration");
        $header = $this->utils->setDescription($header, "La page Administration");
        $bodyUp = $this->utils->searchInc('body-up');
        $body = "";
        $bodyBottom = "";
        $footer = "";
        
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        $page = $temp->getTemplate();
        
        echo $page;
    }
    
     public function viewRGPD(){
         $temp = new Template();
        
        $header = $this->utils->searchInc('header');
        $header = $this->utils->setTitle($header, "RGPD et politique de confidentialité");
        $header = $this->utils->setDescription($header, "La page RGPD et politique de confidentialité");
        $bodyUp = $this->utils->searchInc('body-up');
        $body = $this->utils->searchHtml('RGPD');
        $bodyBottom = $this->utils->searchInc('body-bottom');
        $footer = $this->utils->searchInc('footer');
        
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        $page = $temp->getTemplate();
        
        echo $page;
     }
     
      public function viewContact(){
         $temp = new Template();
        
        $header = $this->utils->searchInc('header');
        $header = $this->utils->setTitle($header, "Contactez Super Agence");
        $header = $this->utils->setDescription($header, "La page contact de super Agence");
        $bodyUp = $this->utils->searchInc('body-up');
        $body = $this->utils->searchHtml('contact');
        $bodyBottom = $this->utils->searchInc('body-bottom');
        $footer = $this->utils->searchInc('footer');
        
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        $page = $temp->getTemplate();
        
        echo $page;
     }
}