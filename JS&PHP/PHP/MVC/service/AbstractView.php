<?php 
abstract class AbstractView{

    public function searchHtml($filename){
        $content = file_get_contents('html/' . $filename . '.php');
        return $content;
    }
}