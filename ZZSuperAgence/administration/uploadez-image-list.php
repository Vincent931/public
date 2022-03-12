<?php session_start();

//Anti CSRF token hidden from html erase-product.php
if($_SESSION['token'] != $_POST['token']){
	$_SESSION['message'] = "Quelquechose s'est mal passé, ? CSRF ?";
	header('Location: ./index.php');
	die();
};


require '../bdd.php';

if(isset($_POST['nameF']) AND !empty($_POST['nameF'])){
	if(isset($_POST['description']) AND !empty($_POST['description'])){

	$nameF=htmlspecialchars($_POST['nameF']);
	if($_FILES['image']['error']>0){ 
		$_SESSION['message']="ERREUR de TRANSFERT, VERIFIER LA TAILLE DE L'IMAGE ou REESSAYER";
		header("Location: uploadez-image.php"); die();
	}
	//array des extensions valides
	$extension_valide = array('jpg', 'jpeg', 'JPEG', 'png', 'svg', 'gif');
	//recuperation de l'extension
	$extension_upload=strtolower( substr(strrchr($_FILES['image']['name'], '.') ,1) );
	//renommage de l'image
	$fichier = $nameF.'.'.$extension_upload;

		//selection des extensions
		if (in_array($extension_upload, $extension_valide)){
				//changer jpeg et JPEG en jpg
				if($extension_upload=='jpeg' || $extension_upload=='JPEG'){
					$extension_upload='jpg';}
				//transfert du fichier temporaire vers repertoire du serveur
				//dossier img
				$nom="../img/{$nameF}.{$extension_upload}";
				$nameF.='.';
				$nameF.=$extension_upload;
				//enregistrement
				$resultat=move_uploaded_file($_FILES['image']['tmp_name'], $nom);
					//verification de l'enregistrement
					if($resultat){$_SESSION['message']="Chargement OK.";}
				//recuperation  d'un eventuel doublon
				$req1=$bdd->prepare('SELECT * FROM image WHERE nom = ?');
				$req1->execute(array($fichier));
				$image_exist=$req1->fetch();
				//si le doublon existe
				if(isset($image_exist['nom']) AND !empty($image_exist['nom'])) {
					$_SESSION['message']="L'image existe déjà"; $req1->closeCursor(); header("Location: uploadez-image.php");
					die();
				}
				$int="image";
				//insertion en bdd
				$req=$bdd->prepare('INSERT INTO image(intitule, nom, description) VALUES(:intitule, :nom, :description)');
				$req->execute(array('intitule'=>$int,
									'nom'=>$nameF,
									'description'=>htmlspecialchars($_POST['description'])));
									$req->closeCursor();
				//chmod du fichier
				chmod("../img/$nameF", 0644);
				$_SESSION['message']="on va au bout du fichier";				

				$_SESSION['message']="Image uploadée";

				header("Location: uploadez-image.php");

		} else {$_SESSION['message']="L'extension de votre fichier n'est pas bonne";header("Location: uploadez-image.php");}
	}else{$_SESSION['message']="Remplissez le champ description";header("Location:uploadez-image.php");}
}else{$_SESSION['message']="Remplissez le champ nom de l'image";header("Location:uploadez-image.php");}