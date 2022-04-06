<?php
require_once './service/Utils.php';

abstract class AbstractView{
    
    public function __construct()
    {
        $this->utils = new Utils();
    }
    /**
     * @params string $filename
     * @return string $content
     */
    public function searchHtml(string $filename) :string
    {
        $content = file_get_contents('html/' . $filename . '.html');
        return $content;
    }
    /**
     * @params string $filename
     * @return string $content
     */
    public function searchInc(string $filename) :string
    {
        $content = file_get_contents('html/inc/' . $filename . '.html');
        return $content;
    }
}