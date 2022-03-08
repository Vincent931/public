<?php session_start();

//Lister tout
?>
<div style="display:flex;justify-content:space-around;width:500px">
<?php
$scandir = scandir("../img");
foreach($scandir as $fichier){
    echo '<div style="width:150px"><img style="width:150px" src="../img/'.$fichier.'"/>';
    echo "$fichier</div><br/>";
}
?></div>