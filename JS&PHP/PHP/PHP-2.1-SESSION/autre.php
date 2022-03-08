<?php 

if(!isset($_SESSION['email']) OR empty($_SESSION['email'])){
     
     $data = 'pas connecté';
 } else {
  $data = 'connecté';
 }
 ?>

<!doctype html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title></title>
</head>
<body>
     <h2><?php echo $data;?></h2>
</body>
</html>

