<?php session_start();

require '../bdd.php';

$ref="#";
$type="location";//achat
$pieces="T1";//T1 bis,T2,T3,T4,T5,T5+
$garage="oui";//non
$SdB=1;
$prix=656;
$charges=120;
$notaire=0;
$explic="Location disponible le 2/06/2022<br>Vue imprenable sur le château d'Angers<br>A voir absolument<br>Visite le Jeudi à 17h00";
$img_p="maison.jpg";//maison2.jpg,appart.jpg,slider-01.jpg,slider-02.jpg,tour.jpg
$img_1="maison2.jpg";
$img_2="appart.jpg";
$img_3="slider-01.jpg";
$img_4="slider-02.jpg";
$adress1="12 rue des ventes";
$adress2="lieu dit ViviJean";
$ville="Angers";
$ZIP="49000";

$loyer=17;
//echo $ref.'---'.$type.'---'.$pieces.'---'.$garage.'---'.$SdB.'---'.$prix.'---'.$charges.'---'.$notaire.'---'.$explic.'---'.$img_p.'---'.$img_1.'---'.$img_2.'---'.$img_3.'---'.$img_4.'---'.$adress1.'---'.$adress2.'---'.$ville.'---'.$ZIP;
for($i=0;$i<50;$i++){

	if($type=="location"){
		$type="achat";
		$prix=125000;
		$charges=0;
		$notaire=12000;
	}else if($type=="achat"){
		$type="location";
		$loyer+=17;
		$prix=656;
		$prix += $loyer;
		$charges=128;
		$notaire=0;
	}

	if($pieces=="T1"){
		$pieces="T1 bis";
	}else
	if($pieces=="T1 bis"){
		$pieces="T2";
	}else
	if($pieces=="T2"){
		$pieces="T3";
	}else
	if($pieces=="T3"){
		$pieces="T4";
	}else
	if($pieces=="T4"){
		$pieces="T5";
	}else
	if($pieces=="T5"){
		$pieces="T5+";
	}else
	if($pieces=="T5+"){
		$pieces="T1";
	}

	if($garage=="oui"){
		$garage="non";
	}

	if($img_p=="maison.jpg"){
		$img_p="maison2.jpg";
		$img_1="slider-01.jpg";
		$img_2="slider-02.jpg";
		$img_3="tour.jpg";
		$img_4="appart.jpg";
	} else
	if($img_p=="maison2.jpg"){
		$img_p="slider-01.jpg";
		$img_1="slider-02.jpg";
		$img_2="tour.jpg";
		$img_3="appart.jpg";
		$img_4="maison.jpg";
	} else 
	if($img_p=="slider-01.jpg"){
		$img_p="slider-02.jpg";
		$img_1="tour.jpg";
		$img_2="appart.jpg";
		$img_3="maison.jpg";
		$img_4="maison2.jpg";
	} else 
	if($img_p=="slider-02.jpg"){
		$img_p="tour.jpg";
		$img_1="appart.jpg";
		$img_2="maison.jpg";
		$img_3="maison2.jpg";
		$img_4="slider-01.jpg";
	} else
	if($img_p=="tour.jpg"){
		$img_p="appart.jpg";
		$img_1="maison.jpg";
		$img_2="maison2.jpg";
		$img_3="slider-01.jpg";
		$img_4="slider-02jpg";
	} else
	if($img_p=="appart.jpg"){
		$img_p="maison.jpg";
		$img_1="maison2.jpg";
		$img_2="slider-01.jpg";
		$img_3="slider-02.jpg";
		$img_4="tour.jpg";
	}


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

}

if($req){
	$_SESSION['message']="OK Produits entrés en base";
} else{
	$_SESSION['message']="Quelquechose s'estmal passé";
}
header('Location:add-50.php');