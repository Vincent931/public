import Zoo from "./Zoo.js";

let zoo = new Zoo;
let counter = 21;

let mange = document.querySelector(".layout .current p");//array mange

for(let i=0; i < zoo.animal.length; i++){
    
let enclos = document.getElementsByClassName('enclos')[i].children;

}

function chrono(current){
    counter--;
    if(counter!==0){
       for(let i = 0; i < zoo.animal.length; i ++){
           
           if (counter < 10){
               
               for(let t = 0; t < zoo.animal.length; i++){
                   
               zoo.animaux[i].children[0].children[1].children[t].innerHTML = "00:00:0" + counter;
               console.log(zoo.animaux[i].children[0].children[1].children[t].innerHTML);
               }
           } else {
               
               for(let t = 0; t < zoo.animal.length; i++){
                   
                    zoo.animaux[i].children[0].children[1].children[t].innerHTML = "00:00:"+ counter;
                }
          }
            zoo.bouton[i].disabled = true;
            zoo.dormir = zoo.animal[i];
            current[i].innerHTML = zoo.dormir;
        }
    } else {
            for(let i = 0; i < zoo.animal.length; i ++){
                zoo.bouton[i].disabled = false;
                zoo.animaux[i].children[1].innerHTML = "00:00:00";
            }
    }
    for(let i = 0; i < zoo.animal.length; i ++){
        
    zoo.instruction = zoo.animal[i];
    current[i].innerHTML = zoo.instruction;
    }
    counter = 21;
    return;
}

export default chrono;