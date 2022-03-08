'use strict';

let positionY;
let direction;
let positionX;
let canvasDom;
let ctx;
// On défini le propriété de notre cercle que l'on va dessiner dans un objet
let ball = {
    color: "#FF0000",
    radius:40,
    x:20,
    y:20,
    directionY: 1
};
let game = {
    width: window.innerWidth,
    height: window.innerHeight,
    color: 'black'
}
/*canvasDom.setAttribute('width', window.innerWidth);
canvasDom.setAttribute('height', window.innerHeight);*/
// Dès que le DOM est chargé on commence
document.addEventListener('DOMContentLoaded', function () {
    
    canvasDom = document.querySelector('#canvas');
    canvasDom.height= game.height;
    canvasDom.width= game.width;
    ctx = canvasDom.getContext('2d');
	ctx.fillStyle = game.color;
	ctx.fillRect(0, 0, window.innerWidth, window.innerHeight);
    //ball
	ctx.fillStyle  =  ball.color;
    // On dessine notre balle la première fois
    displayBall();
    //lancement de la requestanimationframe avec la fonction displaygame
    let animationID  =  window.requestAnimationFrame(displayGame);
});
	
function displayGame(){
    positionX = (window.innerWidth - ball.radius)/2;
    positionY = ball.y;
    //on change de direction si la hauteur min ou max est atteinte
    if (ball.y >= window.innerHeight - ball.radius){
        direction = -1;
    }
    if (ball.y <= ball.radius){
        direction = 1
    }
    //on calcule la nvelle position
    positionY += 10 *  direction;
    ball.y = positionY;
    ball.x = positionX;
    // On dessine & redessine notre balle
    displayBall();
}
function displayBall(){
	// On vide le Canvas
    ctx.clearRect(0, 0, window.innerWidth, window.innerHeight);
    //on dessinne le jeu
    ctx.fillStyle = game.color;
    ctx.fillRect(0, 0, window.innerWidth, window.innerHeight);
    //on dessinne la balle
    ctx.fillStyle = ball.color;
    ctx.beginPath();
    ctx.arc(ball.x, ball.y, ball.radius, 0, 2 * Math.PI);
    ctx.fill();
    
    let animationID  =  window.requestAnimationFrame(displayGame);
}