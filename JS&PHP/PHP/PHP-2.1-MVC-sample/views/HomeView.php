<?php 
require './service/AbstractView.php';

class HomeView extends AbstractView {
    
    public function viewManges($data){
        
        $page = $this->searchHtml('mange');
        $page = str_replace("{userName}", $data->getName(), $page);

        echo $page;
    }
    
    public function viewDors($data){
        
        $page = $this->searchHtml('dors');
        $page = str_replace("{userName}", $data->getName(), $page);

        echo $page;
    }
    
    public function connectForm($message){
        
        $page = $this->searchHtml('connectForm');
        $page = str_replace("{message}", $message, $page);
        echo $page;
    }
}