<?php session_start();

require '../bdd.php';

$id=$_GET['id'];

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
	<link rel="stylesheet" href="../css/footer.css" type="text/css"/>
	<link rel="stylesheet" href="../css/admin.css" type="text/css"/>
</head>
<body>
	<?php require "menu-haut.php";?>
	<main>
		<?php if(isset($_SESSION['message']) AND !empty($_SESSION['message'])){
			echo '<h4 class="h4-mess">'.$_SESSION['message'].'</h4>'; $_SESSION['message']="";
		} ?>
		<br><br>
		<h1>Modifier ce Produit</h1>
		<br>
		<div class="container-fluid">
			<?php $req=$bdd->prepare('SELECT * FROM produits WHERE id=?');
			$req->execute(array($id));
			$donnees=$req->fetch();	?>
			<div class="row">
				<div class="col-md-2 marg-30 text-al-cent">
					<p>
						<a href="window-img.php" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=250px,height=360'); return false;">Listing des images</a>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 marg-30 text-al-cent">
					<img src="../img/<?php echo $donnees['img_p'];?>" class="img-modif"/>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 text-al-cent marge_center">
				<form class="row g-3" method="post" action="modify-product-list.php">
					<!--ligne0-->
					<div class="col-md-12 marg-30 text-al-cent col-blu">
						identifiant N° : <?php echo $donnees['id'];?>
					</div>
					<!--ligne1-->
				    <div class="col-md-4">
				    	<label for="ref" class="form-label">Référence</label>
				    	<input type="text" class="form-control" id="ref" name="ref" value="<?php echo $donnees['ref'];?>">
				  	</div>

				  	<div class="col-md-4">
				    	<label for="type" class="form-label">Type</label>
				    	<select id="type" name="type" class="form-select">
				      		<option value="location" <?php if($donnees['type']=="location"){echo "selected";}?>>Location</option>
				      		<option value="achat"<?php if($donnees['type']=="achat"){echo "selected";}?>>Achat</option>
				    	</select>
				  	</div>

				  	<div class="col-md-4">
				    	<label for="pieces" class="form-label">Pièces (T1, T2..etc)</label>
				    	<select id="pieces" name="pieces" class="form-select">
				      		<option value="T1"<?php if($donnees['pieces']=="T1"){echo "selected";}?>>T1</option>
				      		<option value="T1 bis"<?php if($donnees['pieces']=="T1 bis"){echo "selected";}?>>T1 bis</option>
				      		<option value="T2"<?php if($donnees['pieces']=="T2"){echo "selected";}?>>T2</option>
				      		<option value="T3"<?php if($donnees['pieces']=="T3"){echo "selected";}?>>T3</option>
				      		<option value="T4"<?php if($donnees['pieces']=="T4"){echo "selected";}?>>T4</option>
				      		<option value="T5"<?php if($donnees['pieces']=="T5"){echo "selected";}?>>T5</option>
				      		<option value="T5+"<?php if($donnees['pieces']=="T5+"){echo "selected";}?>>T5+</option>
				    	</select>
				  	</div>

				  	<!--ligne2-->
				  	<div class="col-md-4">
				    	<label for="garage" class="form-label">Garage</label>
				    	<select id="garage" name="garage" class="form-select">
				      		<option value="oui"<?php if($donnees['garage']=="oui"){echo "selected";}?>>oui</option>
				      		<option value="non"<?php if($donnees['garage']=="non"){echo "selected";}?>>non</option>
				    	</select>
				  	</div>

				  	<div class="col-md-4">
				    	<label for="SdB" class="form-label">Salles de Bains</label>
				    	<select id="SdB" name="SdB" class="form-select">
				      		<option value="1"<?php if($donnees['SdB']=="1"){echo "selected";}?>>1</option>
				      		<option value="2"<?php if($donnees['SdB']=="2"){echo "selected";}?>>2</option>
				      		<option value="2+"<?php if($donnees['SdB']=="2+"){echo "selected";}?>>2+</option>
				    	</select>
				  	</div>

					<div class="col-md-4">
				    	&nbsp;
				  	</div>

				  	<!--ligne3-->
				  	<div class="col-md-4">
				    	<label for="prix" class="form-label">Prix (Tot si achat/Mensuel si loc)</label>
				    	<input type="text" class="form-control" id="prix" name="prix" value="<?php echo $donnees['prix'];?>">
				  	</div>

				  	<div class="col-md-4">
				    	<label for="charges" class="form-label">Charges (si loc ou 0)</label>
				    	<input type="text" class="form-control" id="charges" name="charges" value="<?php echo $donnees['charges'];?>">
				  	</div>

				  	<div class="col-md-4">
				    	<label for="notaire" class="form-label">Frais Notaire (si achat ou 0)</label>
				    	<input type="text" class="form-control" id="notaire" name="notaire" value="<?php echo $donnees['notaire'];?>">
				  	</div>

				  	<!--ligne4-->
				  	<div class="col-md-12">
					  	<label for="explic" class="form-label"></label>
					  	<textarea class="form-control" id="explic" rows="6" name="explic" ><?php echo $donnees['explic'];?></textarea>
				  	</div>

				  	<!--ligne5-->
				  	<div class="col-md-4">
				    	<label for="img_p" class="form-label">Image Principale</label>
				    	<input type="text" class="form-control" id="img_p" name="img_p" value="<?php echo $donnees['img_p'];?>">
				  	</div>

				  	<div class="col-md-4">
				    	<label for="img_1" class="form-label">Image 1</label>
				    	<input type="text" class="form-control" id="img_1" name="img_1" value="<?php echo $donnees['img_1'];?>">
				  	</div>

				  	<div class="col-md-4">
				    	<label for="img_2" class="form-label">Image 2</label>
				    	<input type="text" class="form-control" id="img_2" name="img_2" value="<?php echo $donnees['img_2'];?>">
				  	</div>

				  	<!--ligne6-->
				  	<div class="col-md-4">
				    	<label for="img_3" class="form-label">Image 3</label>
				    	<input type="text" class="form-control" id="img_3" name="img_3" value="<?php echo $donnees['img_3'];?>">
				  	</div>

				  	<div class="col-md-4">
				    	<label for="img_4" class="form-label">Image 4</label>
				    	<input type="text" class="form-control" id="img_4" name="img_4" value="<?php echo $donnees['img_4'];?>">
				  	</div>

				  	<div class="col-md-4">
				    	&nbsp;
				  	</div>

				  	<!--ligne7-->
				  	<div class="col-md-6">
				    	<label for="adress1" class="form-label">Adresse 1</label>
				    	<input type="text" class="form-control" id="adress1" name="adress1" value="<?php echo $donnees['adress1'];?>">
				  	</div>

				  	<div class="col-md-6">
				    	<label for="adress2" class="form-label">Adresse 2</label>
				    	<input type="text" class="form-control" id="adress2" name="adress2" value="<?php echo $donnees['adress2'];?>">
				  	</div>

				  	<!--ligne8-->
				  	<div class="col-md-6">
				    	<label for="ville" class="form-label">Ville</label>
				    	<input type="text" class="form-control" id="ville" name="ville" value="<?php echo $donnees['ville'];?>">
				  	</div>

				  	<!--<div class="col-md-6">
				    	<label for="inputState" class="form-label">State</label>
				    	<select id="inputState" class="form-select">
				      		<option selected>Choose...</option>
				      		<option>...</option>
				    	</select>
				  	</div>-->

				  	<div class="col-md-6">
				    	<label for="ZIP" class="form-label">CP</label>
				    	<input type="text" class="form-control" id="ZIP" name="ZIP" value="<?php echo $donnees['ZIP'];?>">
				  	</div>
				  	<!--champs caché-->
				  	<!-- hidden token anti CSRF -->
				  	<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
				  	<input type="hidden" name="id" id="id" value="<?php echo $id;?>"/>
				  	<!--ligne9-->
				  	<div class="col-md1">
				    	<input type="submit" value="envoyer" class="btn btn-primary">
				  	</div>

				</form>
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