<?php 
//fonction qui retourne la date
function setDate():string
{
     $date= date(" d  m   Y  H:i:s");
     
     return $date;
     
}

//function qui retourne un nombre aleatoire entre 0 et 10
function setNumberAl():int
{
     $numberAl= rand(0,10);
     
     return $numberAl;
}

// fonction qui retourne pair ou impair
function isPair($number):string
{
     if($number %2 > 0){
          
          return 'Impair';
          
     } else{
          
          return 'Pair';
     }
}

//fonction qui ecrit a l'envers
function aLenvers($robot)
{
     $aLEnvers = strrev($robot);
     
     return $aLEnvers;
     
}