<?php
require_once './service/Utils.php';

abstract class AbstractView{
    
    public function __construct()
    {
        $this->utils = new Utils();
    }
    /**
     * @params string
     * @return string
     */
    public function searchHtml(string $filename) :string
    {
        $content = file_get_contents('html/' . $filename . '.html');
        return $content;
    }
    /**
     * @params string
     * @return string
     */
    public function searchInc(string $filename) :string
    {
        $content = file_get_contents('html/inc/' . $filename . '.html');
        return $content;
    }
}