<?php

class Template {
    
    protected $header;
    protected $body;
    protected $footer;
    protected $template;
    
    public function getHeader(){
        return $this->Header;
    }
    
    public function setHeader($header){
        $this->header = $header;
    }
    
    public function getBodyUp(){
        return $this->bodyUp;
    }
    
    public function setBodyUp($bodyUp){
        $this->bodyUp = $bodyUp;
    }
    
    public function getBody(){
        return $this->body;
    }
    
    public function setBody($body){
        $this->body = $body;
    }
    
    public function getBodyBottom(){
        return $this->bodyBottom;
    }
    
    public function setBodyBottom($bodyBottom){
        $this->bodyBottom = $bodyBottom;
    }
    
     public function getTemplate(){
        return $this->template;
    }
    
    public function setTemplate($header, $bodyUp, $body, $bodyBottom, $footer){
         $this->template = $header.$bodyUp.$body.$bodyBottom.$footer;
    }
}