<?php 
require_once "./service/Utils.php";

class Body {
    
    
    private $content;
    
    
    private $utils;
    
    public function __construct(){
        $this->utils = new Utils();
        
    }
    
    public function getContent(){
        return $this->content;
    }
    
    public function setContent($title){
        $this->content = $content;
        $this->constructHead();
    }
    
    public function getTitle(){
        return $this->title;
    }
    
    public function setTitle($title){
        $this->title = $title;
        $this->constructHead();
    }
    
    public function getDescription(){
        return $this->description;
    }
    
    public function setDescription($description){
        $this->description = $description;
        $this->constructHead();
    }
    
    public function constructHead(){
        $this->content .= $this->utils->searchInc('_cart');
        $this->content = str_replace('{%title%}', $this->title, $this->content);
        $this->content = str_replace('{%description%}', $this->description, $this->content);
    }
}