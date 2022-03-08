/* Exercice - Move Your Div

Déplacer une div sur quatre points cardinaux quand on clique un bouton.  
Quand la div revient à son point d'origine, un modal s'affiche.  
Le modal disparait lorsqu'on recommence le cycle.  
Un deuxième bouton doit servir à masquer le modal.
*/
let pos = "lt";

let container = document.querySelector(".red");

let moveDiv = document.getElementById("moveDiv");

let modal=document.querySelector(".modal");

let hideModal = document.getElementById('hideModal');

hideModal.addEventListener('click', function(event){
	modal.classList.remove('active');	
});

moveDiv.addEventListener("click", function(event) {
    switch (pos){

    case "lt":
    //position droite haute
        console.log(pos);
        container.style="position:absolute; left:600px;";
        pos = "rt";
        console.log(pos);
    break;

    case "rt":
    //position droite basse
        container.style="position:absolute; left:600px; top:200px";
        pos = "rb";
        console.log(pos);
    break;

    case "rb":
    //position gauche basse
        container.style="position:absolute; left:0px; top:200px";
        pos = "lb";
        console.log(pos);
    break;

    case "lb":
    //position gauche haute
        container.style="position:absolute; left:0px; top:0px";
        modal.classList.add('active');
        pos = "lt";
        console.log(pos);
    break;
    
    default:
        container.style.right="0px";
        container.style.bottom="0px";
    break;
    }
})




