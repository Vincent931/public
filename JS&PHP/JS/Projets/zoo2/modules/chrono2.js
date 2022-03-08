import Dauphin from "./Dauphin.js";

let mange = document.querySelector(".dauphins .layout .current p");
let dauphins = document.getElementsByClassName('enclos')[1].children;
let button = document.getElementsByClassName('actions')[1].children;
let dauphin = new Dauphin;
let counter = 21;

function chrono2(){
    counter--;
    if(counter!==0){
    
       for(let i = 0; i < dauphins.length; i ++){
           if (counter < 10){
               dauphins[i].children[1].innerHTML = "00:00:0"+ counter;
                } else {
               dauphins[i].children[1].innerHTML = "00:00:"+ counter;
           }
        button[i].disabled = true;
        }
        mange.innerHTML = dauphin.dormir();
    } else {
            for(let i = 0; i < dauphins.length; i ++){
                button[i].disabled = false;
                dauphins[i].children[1].innerHTML = "00:00:00";
            }
       
        mange.innerHTML = dauphin.instruction();
        counter=21;
        return;
    }
}
export default chrono2;