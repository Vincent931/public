<?php

class Template {
    
    protected $header;
    protected $bodyUp;
    protected $body;
    protected $bodyBottom;
    protected $footer;
    protected $js;
    protected $template;
    
    /**
     * @return string
     */
    public function getHeader(): string{
        return $this->Header;
    }
    
    /**
     * @param $header string
     */
    public function setHeader($header) : void{
        $this->header = $header;
    }
    
    /**
     * @return string
     */
    public function getBodyUp() : string{
        return $this->bodyUp;
    }
    
     /**
     * @param $bodyup string
     */
    public function setBodyUp($bodyUp) :void {
        $this->bodyUp = $bodyUp;
    }
    
    /**
     * @return string
     */
    public function getBody() :string{
        return $this->body;
    }
    
     /**
     * @param $body string
     */
    public function setBody($body) :void{
        $this->body = $body;
    }
    
    /**
     * @return string
     */
    public function getBodyBottom() :string{
        return $this->bodyBottom;
    }
     /**
     * @param $bodyBottom string
     */
    public function addJs($js) :void{
        $this->js .= $js;
    }
    
    /**
     * @return string
     */
    public function getJs() :string{
        return $this->js;
    }
     /**
     * @param $bodyBottom string
     */
    public function setBodyBottom($bodyBottom) :void{
        $this->bodyBottom = $bodyBottom;
    }
    
    /**
     * @return string
     */
     public function getTemplate() : string{
        return $this->template;
    }
    
     /**
     * @param $header string
     * @param $bodyUp string
     * @param $body string
     * @param $bodyBottom string
     * @param $footer string
     */
    public function setTemplate($header, $bodyUp, $body, $bodyBottom, $footer): void{
         $this->template = $header.$bodyUp.$body.$bodyBottom.$footer;
    }
}