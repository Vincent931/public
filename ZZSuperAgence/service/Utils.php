<?php 
class Utils {
    /**
     * @param
     * @return
     */
    public function searchHtml($filename)
    {
        return file_get_contents('./html/'. $filename . '.html');
    }
    
    /**
     * @param
     * @return
     */
    public function searchInc($filename)
    {
        return file_get_contents('./html/inc/'. $filename . '.html');
    }
    
    /**
     * @param
     * @return
     */
    public function searchScript($script)
    {
        return file_get_contents('./public/js/'. $script . '.js');
    }
    
    /**
     * @param
     * @return
     */
    public function setTitle($header, $title)
    {
        return str_replace("{title}","${title}",$header);
    }
    
    /**
     * @param
     * @return
     */
    public function setDescription($header, $description)
    {
        return str_replace("{description}", "${description}" , $header);
    }
}