<?php
//fonction qui génère deux lettres aleatoirement
function genererLettreAleatoire():string
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
function nomRobot():string
{
     $number = rand(0,9999);
     $name = genererLettreAleatoire();
     $nameRobot = "";
     $nameRobot .= $name;
     $nameRobot .= "-";
     $nameRobot .= $number;
          
     return $nameRobot;
}
    
//fonction qui retourne 1 fois sur 3 "extermination" et 2 fois sur trois "un café"
function unSurTrois():string
{
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
//fonction de validation du nom de robot
function verify($robot)
{    
     $arr=[];
     
     //verif formulaire soumis
     if(isset($robot) AND !empty($robot)){
          
          if (preg_match( "/([A-Za-z]{0,2}-[0-9]{0,4})/", $robot,)) {
               
              //prepare l'array de robot
               $robot = $robot;
               $aLenvers = aLenvers($robot);
               array_push($arr, $robot, $aLenvers);
               
               return $arr;
               
               die();
          } else {
               $robot = nomRobot();
               $aLenvers = aLenvers($robot);
          }
     } else {
          $robot = nomRobot();
          $aLenvers = aLenvers($robot);
     }
array_push($arr, $robot, $aLenvers);

return $arr;

}