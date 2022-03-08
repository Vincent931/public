'use strict';

let positionX;
let positionY;
let canvasDom;
let ctx;
let positionTapxy;
// On défini le propriété de notre paddle
let paddle = {
    x :450,
    y :250,
    deplacement : 50,
    color : 'blue',
    largeur :200,
    hauteur : 20,
    direction :0
};
let ball = {
    color: "#FF0000",
    radius:40,
    x:20,
    y:20,
    directionY: 1,
    directionX: 0,
};
let game = {
    width: window.innerWidth,
    height: window.innerHeight,
    color: 'black',
    gameOver: false,
}
// Dès que le DOM est chargé on commence
document.addEventListener('DOMContentLoaded', function () {
    
    canvasDom = document.querySelector('#canvas');
    canvasDom.height = window.innerHeight-10;
    canvasDom.width = window.innerWidth-10;
    paddle.y = canvasDom.height-30;
    ctx = canvasDom.getContext('2d');
    //on trace le paddle
	ctx.fillStyle = paddle.color;
	ctx.fillRect(paddle.x, paddle.y, paddle.largeur, paddle.hauteur);
	//ball affichage
	ctx.fillStyle  =  ball.color;
    displayBall();
    //event movePaddle();
    document.addEventListener('keydown', movePaddle);
    //lancement de la requestanimationframe avec la fonction displaygame
    if(game.gameOver==true){
        gameOver();
        return;
    }
    let animationID  =  window.requestAnimationFrame(displayGame);
});
	
function movePaddle(e){
    // on détecte la touche et la direction puis on change les coordonnées
    switch(e.key) {
        case 'ArrowRight':
            if ([(canvasDom.width - paddle.largeur) - paddle.x] > 0 ) {paddle.direction = 1;}
            if ([(canvasDom.width - paddle.largeur) - paddle.x] <= 0 ) {paddle.direction = 0;}
            paddle.x += paddle.deplacement * paddle.direction;
            break;
        case 'ArrowLeft':
            if (paddle.x > 0 ) {paddle.direction = -1;}
            if (paddle.x <= 0 ) {paddle.direction = 0;}
            paddle.x += paddle.deplacement * paddle.direction;
            break;
    }
    //displayPaddle();
}
function displayPaddle(){
	// On vide le Canvas avant de redessiner
    
    // On dessine le paddle
    ctx.fillStyle = paddle.color;

    // On dessine un nouveau carré rempli (fill) avec cette couleur
    ctx.fillRect(paddle.x, paddle.y, paddle.largeur, paddle.hauteur);
}
	
function displayGame(){
    //detectCollision(); donne les conditions de retour balle et gameover
    detectCollision();
    //on calcule la nvelle position
    positionX = (game.width - ball.radius)/2;
    positionY = ball.y;
    positionY += 4 *  ball.directionY;
    ball.y = positionY;
    ball.x = positionX;
    if(game.gameOver==true){
        gameOver();
        return;
    }
    // On dessine & redessine notre balle
    displayBall();
    //lancement de la fonction paddle
    displayPaddle();
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
function detectCollision(){
    //positionTapxy
    
    if (ball.y <= ball.radius){
        ball.directionY = 1
    }
    //if ball tapes sur le bord du paddle
    if((ball.y >= (paddle.y - ball.radius)) && (ball.x  > paddle.x && ball.x < paddle.x + paddle.largeur + ball.radius)){
         ball.directionY = -1;
    }
    //if ball tapes sur le bord du canvas et que le paddle n'est pas là
    else if((ball.y >= game.height) && (ball.x < paddle.x || ball.x + ball.radius > paddle.x + paddle.largeur)){
        game.gameOver = true;
    }
    
}
function gameOver(){
    
    let animationID  =  window.requestAnimationFrame(displayGame);
    let cancel = cancelAnimationFrame(animationID);
    ctx.clearRect(0, 0, window.innerWidth, window.innerHeight);
     //on dessinne le jeu
    ctx.fillStyle = game.color;
    ctx.fillRect(0, 0, window.innerWidth, window.innerHeight);
	
    ctx.font = 'bold 100px Verdana';
    
    // Couleur pour écrire Hello
    ctx.fillStyle ='red';

    // On ecrit Hello (string, left, top)
    ctx.fillText('GAME OVER', 100, 350);
}
/*
GameOver
Quoi j'ai perdu ?

Bon avant toute chose il va nous falloir détecter la collision de notre balle avec le plateau. Et si la balle finie en bas du Canvas sans rebondir sur le plateau : Game Over !!

A vous de jouer :

notre fonction playGame() est appelée à chaque rafraichissement, c'est donc ici que nous allons détecter 
si la position de la balle est en collision avec la position du plateau,
pour ça nous allons créer une fonction detectCollisions() qui sera appelée au début de la fonction playGame()
dans cette fonction nous allons y déplacer la détection de collision avec le haut et le bas du Canvas,
puis nous rajoutons dans cette fonction detectCollisions() la détection de collision avec le plateau :
nous allons regarder si la position Y de la balle est la même que le haut du plateau et si la position X de la balle 
se trouve entre le point gauche et le point droit du plateau
si c'est la cas nous inversons la direction de la balle ! Elle remonte !
si la balle descend et n'est pas réceptionnée par le plateau, c'est à dire si la balle entre en collision avec le bas du 
Canvas, c'est GameOver !
Astuce : Nous allons pouvoir rajouter une propriété gameOver à notre objet game. 
Elle sera à falseet passera à true quand on a perdu Dans notre fonction displayGame(), si game.gameOver est true : nous affichons uniquement un texte Game Over et on s'en va de la fonction (return)

*/