<?php session_start();
require '../bdd.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="L'administration de Super Agence par Vincent Nguyen, Développeur"/>
	<title>Administration Super Agence</title>
	<link rel="icon" type="image/png" href="../img/logo.png" />
	<!--bootstrap-->
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap-grid.min.css"/>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap-utilities.min.css"/>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap-reboot.min.css"/>
	<!--booostrap end-->

	<link rel="stylesheet" href="../css/style.css" type="text/css"/>
	<link rel="stylesheet" href="../css/footer.css" type="text/css"/>
	<link rel="stylesheet" href="../css/admin.css" type="text/css"/>
</head>
<body>
	<?php require "menu-haut.php";?>
	<main>
		<br><br><br>
		<?php if(isset($_SESSION['message']) AND !empty($_SESSION['message'])){
			echo '<h4 class="h4-mess">'.$_SESSION['message'].'</h4>'; $_SESSION['message']="";
		} ?>
		<br><br>
		<h1>Listing des images</h1>
		<br>
		<div class="container-fluid">
			<div class="row flex-row">
			<?php $req=$bdd->query('SELECT id, intitule, nom, description FROM image');
			while ($donnees=$req->fetch()){
			?>

			<div class="col-sm-12 col-md-1 flex-col marg-30">
				<img src="../img/<?php echo $donnees['nom'];?>" class="img-list-listing"/>
				<div><?php echo $donnees['id'];?></div>
				<div><?php echo $donnees['nom'];?></div>
				<div><?php echo $donnees['description'];?></div>
				<a href="./erase-image.php?id=<?php echo $donnees['id'];?>">Effacer</a>
			</div>

		<?php } ?>
			</div>
			<br><br><br>
		</div>
	</main>
	<!--bootstrap-->
	<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<!--end bootstrap-->
</body>
</html>