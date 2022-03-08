import Panda from "./Panda.js";

let mangep = document.querySelector(".panda .layout .current p");
let pandas = document.getElementsByClassName('enclos')[0].children;
let buttonp = document.getElementsByClassName('actions')[0].children;
let panda = new Panda;
let counterp = 21;

function chrono(){
    counterp--;
    if(counterp!==0){
    
       for(let i = 0; i < pandas.length; i ++){
           if (counterp < 10){
               pandas[i].children[1].innerHTML = "00:00:0"+ counterp;
                } else {
               pandas[i].children[1].innerHTML = "00:00:"+ counterp;
           }
        buttonp[i].disabled = true;
        }
        mangep.innerHTML = panda.dormir();
    } else {
            for(let i = 0; i < pandas.length; i ++){
                buttonp[i].disabled = false;
                pandas[i].children[1].innerHTML = "00:00:00";
            }
        
        mangep.innerHTML = panda.instruction();
        counterp=21;
        return;
    }
}
export default chrono;