import Lion from "./Lion.js";

let mangel = document.querySelector(".lion .layout .current p");
let lions = document.getElementsByClassName('enclos')[2].children;
let buttonl = document.getElementsByClassName('actions')[2].children;
let lion = new Lion;
let counterl = 21;

function chrono3(){
    counterl--;
    if(counterl!==0){
    
       for(let i = 0; i < lions.length; i ++){
           if (counterl < 10){
               lions[i].children[1].innerHTML = "00:00:0"+ counterl;
                } else {
               lions[i].children[1].innerHTML = "00:00:"+ counterl;
           }
        buttonl[i].disabled = true;

        }
        mangel.innerHTML = lion.dormir();
    } else {
            for(let i = 0; i < lions.length; i ++){
                buttonl[i].disabled = false;
                lions[i].children[1].innerHTML = "00:00:00";
            }
        
        mangel.innerHTML = lion.instruction();
        counterl=21;
        return;
    }
}
export default chrono3;