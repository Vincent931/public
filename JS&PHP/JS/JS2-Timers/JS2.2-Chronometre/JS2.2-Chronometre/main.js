/*# Un chronomètre avec SetTimeout

Nous allons devoir créer un chronomètre sur la page (nombre de secondes écoulées depuis le chargement de la page).
Seule contrainte pour cet exercice, nous allons devoir utiliser setTimeout et non setInterval pour générer la mise à jour du Chronomètre.

## Bonus 1
Affichez un vrai chonomètre avec les minutes et les secondes !

## Bonus 2
Rajoutez un bouton `Start / Stop` et `Reset` 
Nous allons aussi augmenter la précision de notre chronomètre en rajoutant les centièmes de seconde !

## Bonus 3
Mais notre chronomètre est-il vraiment précis ? Avez vous comparé avec le chronomètre de votre téléphone ? De votre ordinateur ?
Que se passe t-il ?
Pouvons nous régler ce problème et comment ?*/
'use strict';
let centiemes = 0;
let seconds = 0;
let minutes = 0;
let startstop=document.getElementById('startstop');
let reset=document.getElementById('reset');
let i=0;
let intervalID = "";
let clear="";

window.addEventListener('load', function(){
   
   let chrono = document.getElementById('chrono');
   
   function repriseinterval(){
       
       intervalID = setInterval(addseconds,10,chrono);
       
   }
   
   function stopinterval(){
       
        clear = window.clearInterval(intervalID);
        
   }
   
   repriseinterval();
   
    let startstop=document.getElementById('startstop');
   
    let reset=document.getElementById('reset');
   
    function addseconds(){
        
        startstop.addEventListener('click', function(){
            
            if(i%2==0){
                
                stopinterval();
                i++;
            reset.addEventListener('click', function(){
                repriseinterval();
                minutes = 0;
                seconds = 0;
                centiemes = 0;
                stopinterval();
                chrono.innerText = minutes + 'min ' + seconds + 's ' + centiemes;
            });
                
            } else if(i%2==1){
                
               repriseinterval();
               i++;
               
            }
            
        });

        reset.addEventListener('click', function(){
                minutes = 0;
                seconds = 0;
                centiemes = 0;
            });
            
            //onload effectues le compteur
            if(centiemes < 100){
                chrono.innerText = minutes + 'min ' + seconds + 's ' + centiemes++;
            } else if (centiemes = 100){
                centiemes =0;
                    chrono.innerText = minutes +'min ' + seconds++ +'s' + centiemes++;
            } else if (seconds<60){
                seconds -= 60;
                centiemes = 0;
                chrono.innerText = minutes++ +'min ' + seconds++ +'s' + centiemes++;
            }
    }
})

   
/*if(seconds < 60){
                chrono.innerText = minutes + 'min ' + seconds++ + 's ' + centiemes++;
        } else {
                seconds-=60;
                chrono.innerText = minutes++ +'min ' + seconds++ +'s' + centiemes++;
        }
*/