<?php
//appels des fonctions
require 'generic_functions.php';
require 'robot_functions.php';

$date =  setDate();
$numberAl =  setNumberAl();
$isPair =  isPair($numberAl);
$unSurTrois =  unSurTrois();

?>
<div class="robot">
     <?php 
     
     //si soumission formulaire ert si post name n'est pas vide 
     if (isset($_POST['name_robot'])){
          
          //on retourne un array
          $arr = verify($_POST['name_robot']);?>
          <p>Salut, humain ! Je suis <span class="red-color"></span><?= $arr[0];?><br>
               Mon nom à l'envers s'écrit <span class="red-color"><?= $arr[1];?></span>. Ah. Ah. Ah.<br>
          </p>
     <?php
     } else {
          //si non soumission du formulaire on l'affiche
          require 'form.php';
     } ?>
     Nous Sommes le <span class="red-color"><?= $date; ?></span><br>
     Le nombre est <span class="red-color"><?=$numberAl;?></span><br> 
     Ce nombre est <span class="red-color"><?= $isPair; ?></span><br>
     <span class="red-color"><?= $unSurTrois; ?></span>
</div>