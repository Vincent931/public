<?php

require_once './service/Utils.php';

class EmailView{

	private $body;
	private $content;
	private $emailfrom;
	
	/**
	 * params string $content
	 */
	public function setContent($content): void
	{
		$this->content = $content;
	}
	/**
	 * return string $this->content
	 */
	public function getContent(): string
	{
		return $this->content;
	}
	/**
	 * params string $emailfrom
	 */
	public function setEmailFrom($emailfrom): void
	{
		$this->emailfrom = $emailfrom;
	}
	/**
	 * return string $this->emailfrom
	 */
	public function getEmailFrom(): string
	{
		return $this->emailfrom;
	}

	public function setBody(): void
	{
		$this->body = '<!DOCTYPE html>
			<html>
				<head>
				     <meta http-equiv="content-type" content="text/html; charset=utf-8">
				   	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
				</head>
				<body style="width:340px;margin:auto">
					<div style="height:150px">&nbsp;</div>
					<div style="color:blue;text-align:left">'.$this->getContent().'</div>
					<div style="color:red;text-align:left">de: '.$this->getEmailFrom().'</div>
				</body>
			</html>';
	}
	/**
	 * return string $this->body
	 */
	public function getBody()
	{
		return $this->body;
	}
	//retourne la vue contact
     /**
      * return string $page
      */
      public function viewContact(): string
      {
      	$utils = new Utils();
        $temp = new Template();
        $header = $utils->searchInc('header');
        $header = $utils->setTitle($header, "Contactez Super Agence");
        $header = $utils->setDescription($header, "La page contact de super Agence");
        $bodyUp = $utils->searchInc('body-up');
        $body = $utils->searchHtml('contact');
        $bodyBottom = $utils->searchInc('body-bottom');
        $footer = $utils->searchInc('footer');
        $utils->setJs('<script src="./public/js/app.other.js"></script>');
        $js = $utils->setJs('<script src="https://kit.fontawesome.com/80f9a27b0d.js" crossorigin="anonymous"></script>');
        $footer = $utils->replaceJS($js, $footer);
        $footer = $utils->setLinkedInJsInFooter($footer);
        $temp->setTemplate($header, $bodyUp, $body, $bodyBottom, $footer);
        $page = $temp->getTemplate();
        
        return $page;
     }
}