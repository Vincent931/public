<?php
require 'signifiant.php';
//require 'signifiant2.php';
try
{
	$bdd = new PDO('mysql:host=db.3wa.io;dbname='.$base.';charset=utf8', $admin, $keypass);
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}
