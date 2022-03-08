<?php

class Template {
    
    protected $headUp;
    protected $headDown;
    protected $header;
    protected $body;
    protected $JS;
    protected $footer;
    protected $template;
    
    public function getHeadUp(){
        return $this->headUp;
    }
    
    public function setHeadUp($headUp){
        $this->headUp = $headUp;
    }
    
     public function getHeadDown(){
        return $this->headDown;
    }
    
    public function setHeadDown($headDown){
        $this->headDown = $headDown;
    }
    
     public function getHeader(){
        return $this->header;
    }
    
    public function setHeader($header){
        $this->header = $header;
    }
    
    public function getBody(){
        return $this->body;
    }
    
    public function setBody($body){
        $this->body = $body;
    }

     public function getJS(){
        return $this->JS;
    }
    
    public function setJS($JS){
        $this->JS = $JS;
    }
    
    public function getFooter(){
        return $this->footer;
    }
    
    public function setFooter($footer){
        $this->footer = $footer;
    }

    public function setTemplate($headUp , $headDown , $header , $body , $JS , $footer){
         return $this->template = $headUp . $headDown . $header . $body . $JS . $footer;
    }

    public function getTemplate(){
         return $this->template;
    }
}