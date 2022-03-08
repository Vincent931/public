<?php
     
require './bdd.php';

$type="location";
$pieces="T3";

$produits=[];

$req = $bdd ->query('SELECT * FROM produits');
//$req -> execute(array('type' => $type, 'pieces' => $pieces));

while($donnees=$req->fetch()){
    array_push($produits, $donnees);
}

//var_dump(json_encode($produits));
echo json_encode($produits);