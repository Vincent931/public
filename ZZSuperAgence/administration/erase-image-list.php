<?php session_start();

//Anti CSRF token hidden from html erase-product.php
if($_SESSION['token'] != $_POST['token']){
	$_SESSION['message'] = "Quelquechose s'est mal passé, ? CSRF ?";
	header('Location: ./index.php');
	die();
};

$id = htmlspecialchars($_POST['id']);

require '../bdd.php';

$req = $bdd ->prepare('SELECT nom FROM image WHERE id =:id');

$req->execute(array('id' => $id));

$donnees = $req->fetch();

$image = '../img/'.$donnees['nom'];

$erase = unlink($image);

$req1 = $bdd ->prepare('DELETE FROM image WHERE id =:id');

$req1 -> execute(array('id' => $id));



if($req && $req1){
     
     $_SESSION['message'] = "Image Effacée";
     
     $req -> closeCursor();
     $req1 -> closeCursor();
     
     header('Location: listing-image.php');
     
     die();
     
} else {
     
     echo '<h1 style="color:red">Quelquechose s\'est mal passé, veuillez revoir votre requête</h1>';
     
}