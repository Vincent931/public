
import Zoo from "./modules/Zoo.js";
import chrono from "./modules/chronoT.js";
let zoo = new Zoo;

zoo.animaux = document.getElementsByClassName('animals')[0].children;
zoo.boutons = document.getElementsByClassName('animals')[0].children[0].children[1];

//console.log(zoo.boutons);

for (let i = 0; i< zoo.animaux.length; i++){
    zoo.animal.push(zoo.animaux[i]);
    zoo.current.push(zoo.animaux[i].children[0].children[0].children);
    for (let t=0; t < 3; t++){
        zoo.bouton.push(zoo.animaux[i].children[1].children[t]);
    }
}


for(let i = 0; i < zoo.animal.length; i++){
//manger
    if(i % 3 == 0){
        for(let z = 0; z < zoo.animal.length; z++){
            
            zoo.bouton[i].addEventListener("click", function(){
                zoo.current[z].innerHTML = zoo.animal[z].manger();
                zoo.dormir = zoo.animal;
                 let myTimeout = setTimeout(function(){
                     zoo.current[z].innerHTML = zoo.dormir();
                 }, 5000);
             
            });
    }
}
//dormir
if(i % 3 == 1){
  zoo.bouton[i].addEventListener("click", function(){
    let time = 0;
    let counter = 21;
        for(let z=0; z<21; z++){
            setTimeout(function(){
                chrono(zoo.current[z]);
            }, time);
        time+=1000;
        }
    })
}
//action
if(i % 3 == 2){

    zoo.bouton[i].addEventListener("click", function(){
    
    let chance = Math.floor(Math.random()*100);
    
        if (chance<34){
            
            zoo.jouer = zoo.animal[i];
            zoo.current[i].innerHTML = zoo.jouer();
            
        } else if(chance >=34 && chance<67){
            
            zoo.siffler = zoo.animal[i];
            zoo.current[i].innerHTML = zoo.siffler();
            
        } else if(chance>=66){
            
            zoo.nager = zoo.animal[i];
            zoo.current[i].innerHTML = zoo.nager();
            
        }
    })
}
}