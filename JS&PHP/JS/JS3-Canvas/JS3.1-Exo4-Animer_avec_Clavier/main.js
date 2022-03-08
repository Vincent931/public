'use strict';

// On défini le propriété de notre carré que l'on va dessiner dans un objet
let square = {
    color: "#FF0000",
    length:80,
    x:10,
    y:10
};

// Notre context et notre Canvas sont définis dans le Scope global pour un accès par nos fonctions
let canvasDom;
let ctx;


// Dès que le DOM est chargé on commence
document.addEventListener('DOMContentLoaded', function () {

     // L'objet du DOM Canvas
    canvasDom = document.querySelector('#canvas');
    
    // Le context utilisé avec Canvas qui donne accès aux librairies de manipulation 2D
    ctx = canvasDom.getContext('2d');

    //remplir couleur de fond canvas
	canvasDom.setAttribute('width', window.innerWidth);
	canvasDom.setAttribute('height', window.innerHeight);

	//Draw Canvas Fill mode
	/*ctx.fillStyle = 'black';
	ctx.fillRect(0, 0, canvasDom.width, canvasDom.height);*/

    // On dit au contexte la couleur de remplissage
	ctx.fillStyle  =  "#FF0000";

    // On dessine notre carré la première fois
    displaySquare();

    //appel à la fonction movesquare
    document.addEventListener('keydown', moveSquare);
});
	
function moveSquare(e){
    // on détecte la touche et la direction puis on change les coordonnées
    switch(e.key)
    {
        case 'ArrowRight':
            if (square.x + square.length < canvasDom.width ) square.x+=10;
            break;
        case 'ArrowLeft':
            if (square.x > 0) square.x-=10;
            break;
        case 'ArrowUp':
            if (square.y > 0) square.y-=10;
            break;
        case 'ArrowDown':
            if (square.y + square.length < canvasDom.height) square.y+=10;
            break;
    }

    // On dessine & redessine notre carré 
    displaySquare();
}
function displaySquare(){
	// On vide le Canvas avant de redessiner
    ctx.clearRect(0, 0, canvasDom.width, canvasDom.height);

    // On dit au contexte que la couleur de remplissage est gris
    ctx.fillStyle = square.color;

    // On dessine un nouveau carré rempli (fill) avec cette couleur
    ctx.fillRect(square.x, square.y, square.length, square.length);
}
