import Panda from "./modules/Panda.js";
import chrono from "./modules/chrono.js";

import Dauphin from "./modules/Dauphin.js";
import chrono2 from "./modules/chrono2.js";

import Lion from "./modules/Lion.js";
import chrono3 from "./modules/chrono3.js";
/***************************************************************************************************************************/
//pandas
let panda = new Panda();
let manger_p = document.getElementsByClassName("actions")[0].children[0];
let mangep = document.querySelector(".panda .layout .current p");


//bouton manger pandas
manger_p.addEventListener("click", function(){
     mangep.innerHTML = panda.manger();
     let myTimeout = setTimeout(function(){
         mangep.innerHTML = panda.dormir();
     }, 5000);
});
//bouton dormir pandas
let dormir_p = document.getElementsByClassName("actions")[0].children[1];
let timep = 0;
let counterp = 21;
dormir_p.addEventListener("click", function(){
    timep = 0;
    counterp = 21;
    for(let zz=0; zz<21; zz++){
        setTimeout(function(){
            
            chrono();
            
        }, timep);
            timep+=1000;
            console.log(timep);
    }
});
//bouton action pandas
let chancep = 0;
let action_p = document.getElementsByClassName("actions")[0].children[2];

action_p.addEventListener("click", function(){
    
    chancep = Math.floor(Math.random()*100);
    if (chancep<34){
        mangep.innerHTML = panda.grimper();
    } else if(chancep >=34 && chancep<67){
        mangep.innerHTML = panda.rouler();
    } else if(chancep>=66){
        mangep.innerHTML = panda.courir();
    }
    
});
/******************************************************************************************/
/*dauphins*/

let dauphin = new Dauphin();
let manger_d = document.getElementsByClassName("actions")[1].children[0];
let mange = document.querySelector(".dauphins .layout .current p");


//bouton manger dauphins
manger_d.addEventListener("click", function(){
     mange.innerHTML = dauphin.manger();
     let myTimeout = setTimeout(function(){
         mange.innerHTML = dauphin.dormir();
     }, 5000);
});
//bouton dormir dauphins
let dormir_d = document.getElementsByClassName("actions")[1].children[1];
let time = 0;
let counter = 21;
dormir_d.addEventListener("click", function(){
    time = 0;
    counter = 21;
    for(let z=0; z<21; z++){
        setTimeout(function(){
            
            chrono2();
            
        }, time);
            time+=1000;
            console.log(time);
    }
});
//bouton action dauphins
let chance = 0;
let action_d = document.getElementsByClassName("actions")[1].children[2];

action_d.addEventListener("click", function(){
    
    chance = Math.floor(Math.random()*100);
    if (chance<34){
        mange.innerHTML = dauphin.jouer();
    } else if(chance >=34 && chance<67){
        mange.innerHTML = dauphin.siffler();
    } else if(chance>=66){
        mange.innerHTML = dauphin.nager();
    }
    
});
/*************************************************************************************************************/
//lion

let lion = new Lion();
let manger_l = document.getElementsByClassName("actions")[2].children[0];
let mangel = document.querySelector(".lion .layout .current p");


//bouton manger lion
manger_l.addEventListener("click", function(){
     mangel.innerHTML = lion.manger();
     let myTimeout = setTimeout(function(){
         mangel.innerHTML = lion.dormir();
     }, 5000);
});
//bouton dormir lion
let dormir_l = document.getElementsByClassName("actions")[2].children[1];
let timel = 0;
let counterl = 21;
dormir_l.addEventListener("click", function(){
    timel = 0;
    counterl = 21;
    for(let zzz=0; zzz<21; zzz++){
        setTimeout(function(){
            
            chrono3();
            
        }, timel);
            timel+=1000;
            console.log(timel);
    }
});
//bouton action lion
let chancel = 0;
let action_l = document.getElementsByClassName("actions")[2].children[2];

action_l.addEventListener("click", function(){
    
    chancel = Math.floor(Math.random()*100);
    if (chancel<34){
        mangel.innerHTML = lion.rugir();
    } else if(chancel >=34 && chancel<67){
        mangel.innerHTML = lion.chasser();
    } else if(chancel>=66){
        mangel.innerHTML = lion.courir();
    }
    
});
/********************************************************************************************************************/
