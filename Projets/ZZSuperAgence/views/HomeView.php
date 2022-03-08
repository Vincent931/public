<?php 
require './service/AbstractView.php';
require './models/Template.php';

class HomeView extends AbstractView {
    
    public function viewIndex(){
        
        $temp = new Template();
        
        $header = $this->searchHtml('header');
        $footer = $this->searchHtml('footer');
        $bodyUp = $this->searchHtml('body-up');
        $body = $this->searchHtml('index');
        $bodyBottom = $this->searchHtml('body-bottom');
        
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        
        $page = $temp->getTemplate();
        echo $page;
    }
    
    
    public function connectForm($message){
        
        $temp = new Template();
        
        $header = $this->searchHtml('header');
        $footer = $this->searchHtml('footer');
        $bodyUp = $this->searchHtml('body-up');
        $body = $this->searchHtml('connectForm');
        $bodyBottom = $this->searchHtml('body-bottom');
        
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        $page = $temp->getTemplate();
        $page = str_replace("{message}", $message, $page);
        
        echo $page;
    }
    
    public function viewProducts(){
        
        $temp = new Template();
        
        $header = $this->searchHtml('header');
        $footer = $this->searchHtml('footer');
        $bodyUp = $this->searchHtml('body-up');
        $body = '<p>Yess</p>';
        $bodyBottom = $this->searchHtml('body-bottom');
        
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        $page = $temp->getTemplate();
        
        echo $page;
    }
}
/*public function viewManges($data){
        
        $page = $this->searchHtml('mange');
        $page = str_replace("{userName}", $data->getName(), $page);

        echo $page;
    }
    
    public function viewDors($data){
        
        $page = $this->searchHtml('dors');
        $page = str_replace("{userName}", $data->getName(), $page);

        echo $page;
    }*/