<?php
session_start();

require "./controller/HomeController.php";

//route par defaut
if(!$_GET){
    header('Location: ./index.php?action=accueil');
}

// route account 
if(isset($_GET['action']) && $_GET['action'] == 'account'){

    $controller = new HomeController();
    $controller->account();
}

// route accueil 
if(isset($_GET['action']) && $_GET['action'] == 'accueil'){

    $controller = new HomeController();
    $controller->index();
}

// route login 
if(isset($_GET['action']) && $_GET['action'] == 'login'){

    $controller = new HomeController();
    $controller->login();
}

// route product 
if(isset($_GET['action']) && $_GET['action'] == 'product'){

    $controller = new HomeController();
    $controller->product();
}

// route shop 
if(isset($_GET['action']) && $_GET['action'] == 'shop'){

    $controller = new HomeController();
    $controller->shop();
}

//route renduForm
if(isset($_GET['action']) && $_GET['action'] == 'renduForm'){
    
    $controller = new HomeController();
    //var_dump($_POST);
    $controller->renduForm($_POST['email'], $_POST['password']);
}