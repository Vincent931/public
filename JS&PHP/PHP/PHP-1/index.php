<?php
class robot
{
     //fonction qui génère deux lettres aleatoirement
     public function genererLettreAleatoire():string
     {
           $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
           $longueur = strlen($caracteres);
           $lettresAleatoire = '';
           
           for ($i = 0; $i < 2; $i++)
           {
           //on recupere l'index aleatoire rand(0,longueur-1)
           //rand(min,max) renvoie une valeur aléatoire, comprise entre min=0 et max 
           $lettresAleatoire .= $caracteres[rand(0, $longueur - 1)];
           }
           
           return $lettresAleatoire;
           
     }
     
     //fonction qui retourne un nom de robot
     public function nomRobot():string
     {
          $number = rand(0,9999);
          $name = $this -> genererLettreAleatoire();
          $robot = "";
          $robot .= $name;
          $robot .= "-";
          $robot .= $number;
          
          return $robot;
     }
     
     //fonction qui retourne la date
     public function setDate():string
     {
          $date= date(" d  m   Y  H:i:s");
          
          return $date;
          
     }
     
     //function qui retourne un nombre aleatoire entre 0 et 10
     public function setNumberAl():int
     {
          $numberAl= rand(0,10);
          
          return $numberAl;
          
     }
     
     // fonction qui retourne pair ou impair
     public function isPair($number):string
     {
          if($number %2 > 0){
              
               return 'Impair';
               
          } else{
              
               return 'Pair';
               
          }
     }
     //fonction qui ecrit a l'envers
     public function aLenvers($robot):string
     {
     $aLEnvers = strrev($robot);
          return $aLEnvers;
     }
     //fonction qui retourne 1 fois sur 3 "extermination" et 2 fois sur trois "un café"
     public function unSurTrois():string{
     $p = rand(1,3);
     $t=["Vous voulez un café ?", "Extermination ! Extermination !"];
          switch($p){
               case 1:
                    return $t[0];
               break;
               case 2:
                    return $t[0];
                    break;
               case 3:
                    return $t[1];
                    break;
          }
     }
}
//time zone
date_default_timezone_set('Europe/Paris');

//instanciation objet $robot
$robot = new robot();

//appels des méthodes
$nameRobot = $robot -> nomRobot();
$date = $robot -> setDate();
$numberAl = $robot -> setNumberAl();
$isPair = $robot -> isPair($numberAl);
$aLEnvers = $robot -> aLenvers($nameRobot);
$unSurTrois = $robot -> unSurTrois();

?>
<!doctype html>
<html lang="fr">
<head>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="./style.css" type="text/css" />
     <title>Robot</title>
</head>
<body>
    <div class="robot">
         <!-- affichages des variables -->
         Salut, humain ! Je suis <span class="red-color"><?= $nameRobot; ?></span><br>
         Nous Sommes le <span class="red-color"><?= $date; ?></span><br>
         Le nombre est <span class="red-color"><?=$numberAl;?></span><br> 
         Ce nombre est <span class="red-color"><?= $isPair; ?></span><br>
         Mon nom à l'envers s'écrit <span class="red-color"><?= $aLEnvers; ?></span>. Ah. Ah. Ah.<br>
         <span class="red-color"><?= $unSurTrois; ?></span>
     </div>
</body>
</html>