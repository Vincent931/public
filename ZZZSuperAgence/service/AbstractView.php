<?php
/**
@param $filename : file
@return string
*/
abstract class AbstractView{
    public function __construct()
    {
        $this->utils = new Utils();
    }
    /**
     * @return string
     */
    public function searchHtml($filename) :string
    {
        $content = file_get_contents('html/' . $filename . '.html');
        return $content;
    }
    /**
     * @return string
     */
    public function searchInc($filename) :string
    {
        $content = file_get_contents('html/inc/' . $filename . '.html');
        return $content;
    }
}