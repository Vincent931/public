<?php
foreach($_POST as $key => $value){
     switch ($value){
          case  "":
               header ('Location: index.php');
          break;
     }
}
$_SESSION['email'] = htmlspecialchars($_POST['email']);

if(!empty($_SESSION['email'])){
     echo 'Connecté';
}