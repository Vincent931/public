<?php 
require './view/HomeView.php';

class HomeController {
    
    private $view;
    
    public function __construct(){
        $this->view = new HomeView();
    }
    
    
    public function home(){
        $this->view->displayHome();
    }
}