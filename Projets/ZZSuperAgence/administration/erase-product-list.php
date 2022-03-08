<?php session_start();
//Anti CSRF token hidden from html erase-product.php
if($_SESSION['token'] != $_POST['token']){
	$_SESSION['message'] = "Quelquechose s'est mal passé, ? CSRF ?";
	header('Location: ./index.php');
	die();
};

require '../bdd.php';

$id = htmlspecialchars($_POST['id']);

$req = $bdd -> prepare('DELETE FROM produits WHERE id=:id');

$req -> execute(array('id' => $id));

$_SESSION['message']="Effacement Ok du produit N°".$id;

header('Location:listing-product.php');