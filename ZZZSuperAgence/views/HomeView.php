<?php
require_once './service/Utils.php';
require_once './models/Template.php';

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
        $this->utils->setJS('<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>');
        $this->utils->setJS('<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>');
        $this->utils->setJS('<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>');
        $this->utils->setJS('<script src="https://kit.fontawesome.com/80f9a27b0d.js" crossorigin="anonymous"></script>');
        $JS = $this->utils->setJS('<script type="text/javascript" src="./public/js/slick1.js"></script>');
        $footer = $this->utils->replaceJS($JS, $footer);
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
    public function showError(array $error): void
    {
        
        $temp = new Template();
        $header = $this->utils->searchInc('header');
        $header = $this->utils->setTitle($header, "Une Erreur s'est produite");
        $header = $this->utils->setDescription($header, "La Page d'erreur vous informe que qulequechose s'est mal passé");
        $bodyUp = $this->utils->searchInc('body-up');
        $body = '<main><div class="error-message"><h3 class="h3-error-message">'.$error['error'].'</h3><br><a href="'.$error['href'].'">'.$error['lien'].'</a></div></main>';
        $bodyBottom = $this->utils->searchInc('body-bottom');
        $footer = $this->utils->searchInc('footer');
        $JS = $this->utils->setJS('<script src="https://kit.fontawesome.com/80f9a27b0d.js" crossorigin="anonymous"></script>');
        $footer = $this->utils->replaceJS($JS, $footer);
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
    public function showSuccess(array $success): void
    {
        $temp = new Template();
        $header = $this->utils->searchInc('header');
        $header = $this->utils->setTitle($header, "La requête a été initié avec succès");
        $header = $this->utils->setDescription($header, "Super Agence vous informe du succès de la requête");
        $bodyUp = $this->utils->searchInc('body-up');
    $body = '<div class="success-message"><h3 class="h3-succes-message">'.$success["message"].'</h3><br><a href="'.$success["href"].'">'.$success["lien"].'</a></div>';
        $bodyBottom = $this->utils->searchInc('body-bottom');
        $footer = $this->utils->searchInc('footer');
        $js = $this->utils->setJS('<script src="https://kit.fontawesome.com/80f9a27b0d.js" crossorigin="anonymous"></script>');
        $footer = $this->utils->replaceJs($js, $footer);
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        $page = $temp->getTemplate();
        
        echo $page;
    }

    public function viewAdmin(): void
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
    
     public function viewRGPD(): void{
         $temp = new Template();
        
        $header = $this->utils->searchInc('header');
        $header = $this->utils->setTitle($header, "RGPD et politique de confidentialité");
        $header = $this->utils->setDescription($header, "La page RGPD et politique de confidentialité");
        $bodyUp = $this->utils->searchInc('body-up');
        $body = $this->utils->searchHtml('RGPD');
        $bodyBottom = $this->utils->searchInc('body-bottom');
        $footer = $this->utils->searchInc('footer');
        $JS = $this->utils->setJS('<script src="https://kit.fontawesome.com/80f9a27b0d.js" crossorigin="anonymous"></script>');
        $footer = $this->utils->replaceJS($JS, $footer);
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        $page = $temp->getTemplate();
        
        echo $page;
     }
     
      public function viewContact(): void{
         $temp = new Template();
        
        $header = $this->utils->searchInc('header');
        $header = $this->utils->setTitle($header, "Contactez Super Agence");
        $header = $this->utils->setDescription($header, "La page contact de super Agence");
        $bodyUp = $this->utils->searchInc('body-up');
        $body = $this->utils->searchHtml('contact');
        $bodyBottom = $this->utils->searchInc('body-bottom');
        $footer = $this->utils->searchInc('footer');
        $JS = $this->utils->setJS('<script src="https://kit.fontawesome.com/80f9a27b0d.js" crossorigin="anonymous"></script>');
        $footer = $this->utils->replaceJS($JS, $footer);
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        $page = $temp->getTemplate();
        
        echo $page;
     }
     
     public function viewAPropos(): void
     {
        $temp = new Template();
        $header = $this->utils->searchInc('header');
        $header = $this->utils->setTitle($header, "A propos de Super Agence");
        $header = $this->utils->setDescription($header, "La page explicative de Super Agence");
        $bodyUp = $this->utils->searchInc('body-up');
        $body = $this->utils->searchHtml('a-propos');
        $bodyBottom = $this->utils->searchInc('body-bottom');
        $footer = $this->utils->searchInc('footer');
        $JS = $this->utils->setJS('<script src="https://kit.fontawesome.com/80f9a27b0d.js" crossorigin="anonymous"></script>');
        $footer = $this->utils->replaceJS($JS, $footer);
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        $page = $temp->getTemplate();
        
        echo $page;
     }
}