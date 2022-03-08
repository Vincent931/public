<?php session_start();

$_SESSION['token'] = md5(uniqid(mt_rand(), true));
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
		<h1>Ajouter une image</h1>
		<br>
		<div class="container-fluid">
			<div class="col-sm-12 col-md-6 text-al-cent marge_center">
				<form class="row g-3" method="post" action="uploadez-image-list.php" enctype="multipart/form-data">
					<div class="col-md-12">
					  	<label for="image" class="form-label">Default file input example</label>
					  	<input class="form-control" type="file" id="image" name="image">
					</div>
					<div class="col-md-6">
				    	<label for="nameF" class="form-label">Nom à donner (sans l'extension(ex:.png))</label>
				    	<input type="text" class="form-control" id="nameF" name="nameF">
				  	</div>
				  	<div class="col-md-6">
				    	<label for="description" class="form-label">Précisions sur l'image</label>
				    	<input type="text" class="form-control" id="description" name="description">
				  	</div>
				  	<!-- hidden token anti CSRF -->
				  	<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
				  	<!-- hidden poids max de l'image ~5Mo -->
				  	<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
					<div class="col-md1">
					   	<button type="submit" class="btn btn-primary">Envoyer</button>
					</div>
				</form>
			</div>
		</div>
	</main>
	<!--bootstrap-->
	<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<!--end bootstrap-->
</body>
</html>