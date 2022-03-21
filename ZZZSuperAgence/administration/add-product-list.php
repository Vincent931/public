<?php session_start();
//Anti CSRF token hidden from html add-product.php
if($_SESSION['token'] != $_POST['token']){
	$_SESSION['message'] = "Quelquechose s'est mal passé, ? CSRF ?";
	header('Location: ./index.php');
	die();
};


require '../bdd.php';

//text recherche de champs vide
foreach ($_POST as $key => $value) {
    switch ($value) {
    case "":
        $_SESSION['message'] = "Error {$key} est vide";
        header('Location:add-product.php');
        die();
        break;
    }
}
//seul explication doit afficher les balises, seul l'administrateur a acces à cette variable
$explic = $_POST['explic'];

$ref = htmlspecialchars($_POST['ref']);
$type = htmlspecialchars($_POST['type']);
$pieces = htmlspecialchars($_POST['pieces']);
$garage = htmlspecialchars($_POST['garage']);
$SdB = htmlspecialchars($_POST['SdB']);
$prix = htmlspecialchars($_POST['prix']);
$charges = htmlspecialchars($_POST['charges']);
$notaire = htmlspecialchars($_POST['notaire']);
$img_p = htmlspecialchars($_POST['img_p']);
$img_1 = htmlspecialchars($_POST['img_1']);
$img_2 = htmlspecialchars($_POST['img_2']);
$img_3 = htmlspecialchars($_POST['img_3']);
$img_4 = htmlspecialchars($_POST['img_4']);
$adress1 = htmlspecialchars($_POST['adress1']);
$adress2 = htmlspecialchars($_POST['adress2']);
$ville = htmlspecialchars($_POST['ville']);
$ZIP = htmlspecialchars($_POST['ZIP']);

$req=$bdd->prepare('INSERT INTO produits(ref, type, pieces, garage, SdB, prix, charges, notaire, explic, img_p, img_1, img_2, img_3, img_4, adress1, adress2, ville, ZIP, date) VALUES(:ref, :type, :pieces, :garage, :SdB, :prix, :charges, :notaire, :explic, :img_p, :img_1, :img_2, :img_3, :img_4, :adress1, :adress2, :ville, :ZIP, NOW())');

$req->execute(array(
	'ref' => $ref,
	'type' => $type,
	'pieces' => $pieces,
	'garage' => $garage,
	'SdB' => $SdB,
	'prix' => $prix,
	'charges' => $charges,
	'notaire' => $notaire,
	'explic' => $explic,
	'img_p' => $img_p,
	'img_1' => $img_1,
	'img_2' => $img_2,
	'img_3' => $img_3,
	'img_4' => $img_4,
	'adress1' => $adress1,
	'adress2' => $adress2,
	'ville' => $ville,
	'ZIP' => $ZIP
));

$req->closeCursor();
if($req){
	$_SESSION['message']="OK Produit entré en base";
} else{
	$_SESSION['message']="Quelquechose s'est mal passé";
}

header('Location:add-product.php');