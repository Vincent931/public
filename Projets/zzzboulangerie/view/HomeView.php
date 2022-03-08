<?php
require './service/AbstractView.php';
require './models/Template.php';

class HomeView extends AbstractView {
    // accueil
    public function viewIndex() {
      
        $page = new Template(); 
        
        
        $page->setHeadUp( file_get_contents( './html/page/head-up.html' ) );
        
        
        $page->setHeadDown( '<title>Accueil boulangerie</title><br><meta name="description" content="La super boulangerie a découvrir"/></head>
            <body>' );
        
        
        $page->setHeader( file_get_contents('./html/page/header.html' ) );
        
        
        $page->setBody( file_get_contents( './html/index.html' ) );
        
        
        $page->setJS(file_get_contents( './html/page/js.html' ) );
        
        
        $page->setFooter(file_get_contents( './html/page/footer.html' ) );
        
        
        $page->setTemplate( $page->getHeadUp(), $page->getHeadDown(), $page->getHeader(),  $page->getBody(), $page->getJS(), $page->getFooter() );
        
        
        echo $page->getTemplate();
    }

    // account
    public function viewAccount() {
        
        
        $page = new Template();
        
        
        $page->setHeadUp( file_get_contents( './html/page/head-up.html' ) );
        
        
        $page->setHeadDown( '<title>Account</title><br><meta name="description" content="Account de la super boulangerie"/></head>
            <body>' );
        
        
        $page->setHeader( file_get_contents( './html/page/header.html' ) );
        
        
        $page->setBody( file_get_contents( './html/account.html' ) );
        
        
        $page->setJS( file_get_contents( './html/page/js.html' ) );
        
        
        $page->setFooter( file_get_contents( './html/page/footer.html' ) );
        
        
        $page->setTemplate( $page->getHeadUp(), $page->getHeadDown(), $page->getHeader(),  $page->getBody(), $page->getJS(), $page->getFooter() );
        
        
        echo $page->getTemplate();
        
    }

    // login
    public function viewLogin() {
        
        
        $page = new Template();
        
        
        $page->setHeadUp( file_get_contents( './html/page/head-up.html' ) );
        
        
        $page->setHeadDown( '<title>Login</title><br><meta name="description" content="Login de la super boulangerie"/></head>
            <body>' );
        
        
        $page->setHeader( file_get_contents('./html/page/header.html') );
        
        
        $page->setBody( file_get_contents( './html/login.html' ) );
        
        
        $page->setJS( file_get_contents( './html/page/js.html' ) );
        
        
        $page->setFooter( file_get_contents( './html/page/footer.html' ) );
        
        
        $page->setTemplate( $page->getHeadUp(), $page->getHeadDown(), $page->getHeader(),  $page->getBody(), $page->getJS(), $page->getFooter());
        
        
        echo $page->getTemplate();
    }

    // product
    public function viewProduct() {

        
        $page = new Template();
        
        
        $page->setHeadUp( file_get_contents('./html/page/head-up.html' ) );
        
        
        $page->setHeadDown( '<title>Produits</title><br><meta name="description" content="Produits de la super boulangerie"/></head>
            <body>' );
        
        
        $page->setHeader( file_get_contents( './html/page/header.html' ));
        
        
        $page->setBody( file_get_contents( './html/product.html' ) );
        
        
        $page->setJS( file_get_contents( './html/page/js.html' ));
        
        
        $page->setFooter( file_get_contents( './html/page/footer.html' ) );
        
        
        $page->setTemplate( $page->getHeadUp(), $page->getHeadDown(), $page->getHeader(),  $page->getBody(), $page->getJS(), $page->getFooter() );
        
        
        echo $page->getTemplate();
    }

    // shop
    public function viewShop() {
        
        
        $page = new Template();
        
        
        $page->setHeadUp( file_get_contents('./html/page/head-up.html' ) );
        
        
        $page->setHeadDown( '<title>Shop</title><br><meta name="description" content="Shopping de la super boulangerie"/></head>
             <body>' );
        
        
        $page->setHeader( file_get_contents('./html/page/header.html' ) );
        
        
        $page->setBody( file_get_contents('./html/shop.html' ) );
        
        
        $page->setJS( file_get_contents( './html/page/js.html' ) );
        
        
        $page->setFooter( file_get_contents('./html/page/footer.html' ) );
        
        
        $page->setTemplate( $page->getHeadUp(), $page->getHeadDown(), $page->getHeader(),  $page->getBody(), $page->getJS(), $page->getFooter() );
        
       
        echo $page->getTemplate();
    }

    // showSuccess
    public function showSucces() {
        
        
        $page = new Template();
        
        
        $page->setHeadUp( file_get_contents( './html/page/head-up.html' ) );
        
        
        $page->setHeadDown( '<title>Shop</title><br><meta name="description" content="Shopping de la super boulangerie"/></head>
            <body>' );
        
        
        $page->setHeader( file_get_contents( './html/page/header.html' ) );
        
        
        $page->setBody( file_get_contents( './html/succes.html' ) );
        
        
        $page->setJS( file_get_contents( './html/page/js.html' ) );
        
        
        $page->setFooter( file_get_contents( './html/page/footer.html' ) );
        
        
        $page->setTemplate( $page->getHeadUp(), $page->getHeadDown(), $page->getHeader(),  $page->getBody(), $page->getJS(), $page->getFooter() );
        
        
        echo $page->getTemplate();
    }
}

/*public function viewManges($data){
        $page = $this->searchHtml('mange');
        $page = str_replace("{userName}", $data->getName(), $page);
        echo $page;
}*/