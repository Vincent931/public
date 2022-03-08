<?php session_start();
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
		<br><br><br><br><br>
		<h1>Exemple de formulaire</h1>
		<br>
		<div class="container-fluid">
			<div class="col-sm-12 col-md-6 text-al-cent marge_center">
				<form class="row g-3">
				    <div class="col-md-6">
				    	<label for="inputEmail4" class="form-label">Email</label>
				    	<input type="email" class="form-control" id="inputEmail4">
				  	</div>

				  	<div class="col-md-6">
				    	<label for="inputPassword4" class="form-label">Password</label>
				    	<input type="password" class="form-control" id="inputPassword4">
				  	</div>

				  	<div class="col-md-12">
				    	<label for="inputAddress" class="form-label">Address</label>
				    	<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
				  	</div>

				  	<div class="col-md-12">
				    	<label for="inputAddress2" class="form-label">Address 2</label>
				    	<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
				  	</div>

				  	<div class="col-md-4">
				    	<label for="inputCity" class="form-label">City</label>
				    	<input type="text" class="form-control" id="inputCity">
				  	</div>

				  	<div class="col-md-6">
				    	<label for="inputState" class="form-label">State</label>
				    	<select id="inputState" class="form-select">
				      		<option selected>Choose...</option>
				      		<option>...</option>
				    	</select>
				  	</div>

				  	<div class="col-md-2">
				    	<label for="inputZip" class="form-label">Zip</label>
				    	<input type="text" class="form-control" id="inputZip">
				  	</div>

				  	<div class="col-md-12">
				    	<div class="form-check">
				      		<input class="form-check-input" type="checkbox" id="gridCheck">
				      		<label class="form-check-label" for="gridCheck">
				        	Check me out
				      		</label>
				    	</div>
				  	</div>

				  	<div class="col-md-12">
					  	<label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
					  	<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				  	</div>

					<div class="col-md-12">
					  	<label for="formFile" class="form-label">Default file input example</label>
					  	<input class="form-control" type="file" id="formFile">
					</div>

				  	<div class="col-md1">
				    	<button type="submit" class="btn btn-primary">Sign in</button>
				  	</div>

				</form>
			</div>
		</div>
		<br><br><br><br>
	</main>
	<!--bootstrap-->
	<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<!--end bootstrap-->
</body>
</html>