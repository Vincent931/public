/*# Dessiner un rectangle

A l'aide du context2D vous dessinez un rectangle dans le Canvas.

Vous pouvez dessinez 3 rectangles pour bien tester le fonctionnement :

- un rectangle sans remplissage avec un contour noir,
- un rectangle sans remplissage avec un contour vert,
- un rectangle plein, rempli de rouge.*/

'use strict';

document.addEventListener('DOMContentLoaded',function(){
    
    // L'objet du DOM Canvas
	let  canvasDom  =  document.querySelector('#canvas');

	// Le context utilisé avec Canvas qui donne accès aux librairies de manipulation 2D
	let  ctx  =  canvasDom.getContext('2d');
	
	// On dit au contexte que la couleur de contour (stroke) est noir
	ctx.strokeStyle  =  "#000000";

	// On trace le contour (stroke) d'un rectangle (left, top, longueur, largeur)
	ctx.strokeRect(20, 50, 300, 450);

	// On dit au contexte que la couleur de contour (stroke) est rouge
	ctx.strokeStyle  =  "green";

	// On trace un nouveau rectangle dans le Canvas avec cette couleur de contour
	ctx.strokeRect(340, 50, 200, 150);

	// On dit au contexte que la couleur de remplissage est rouge
	ctx.fillStyle  =  "#FF0000";

	// On trace un nouveau rectangle rempli (fill) avec cette couleur (mais il n'a pas de contour)
	ctx.fillRect(340, 210, 200, 150);
});
