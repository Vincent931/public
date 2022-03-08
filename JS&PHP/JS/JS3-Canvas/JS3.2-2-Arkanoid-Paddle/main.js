'use strict';

let canvasDom;
let ctx;
// On défini le propriété de notre paddle
let paddle = {
    x :20,
    y :20,
    deplacement : 10,
    color : 'black',
    largeur : 550,
    hauteur : 550,
    direction :0
};
/*canvasDom.setAttribute('width', window.innerWidth);
canvasDom.setAttribute('height', window.innerHeight);*/
// Dès que le DOM est chargé on commence
document.addEventListener('DOMContentLoaded', function () {
    
    canvasDom = document.querySelector('#canvas');
    canvasDom.height = window.innerHeight-10;
    canvasDom.width = window.innerWidth-10;
    
    ctx = canvasDom.getContext('2d');
    //on trace le paddle
	ctx.fillStyle = paddle.color;
	ctx.fillRect(paddle.x, paddle.y, paddle.largeur, paddle.hauteur);
    //lancement de la requestanimationframe avec la fonction displaygame
   document.addEventListener('keydown', movePaddle);
});
	
function movePaddle(e){
    // on détecte la touche et la direction puis on change les coordonnées
    switch(e.key) {
        case 'ArrowRight':
            if ([(canvasDom.width - paddle.largeur) - paddle.x] > 0 ) {paddle.direction = 1;}
            if ([(canvasDom.width - paddle.largeur) - paddle.x] == 0 ) {paddle.direction = 0;}
            paddle.x += paddle.deplacement * paddle.direction;
            break;
        case 'ArrowLeft':
            if (paddle.x > 0 ) {paddle.direction = -1;}
            if (paddle.x == 0 ) {paddle.direction = 0;}
            paddle.x += paddle.deplacement * paddle.direction;
            break;
    }

    // On dessine & redessine notre carré 
    displayPaddle();
}
function displayPaddle(){
	// On vide le Canvas avant de redessiner
    ctx.clearRect(0, 0, canvasDom.width, canvasDom.height);

    // On dessine le paddle
    ctx.fillStyle = paddle.color;

    // On dessine un nouveau carré rempli (fill) avec cette couleur
    ctx.fillRect(paddle.x, paddle.y, paddle.largeur, paddle.hauteur);
}
/*
Déplacer la plateau
Maintenant que nous avons une balle qui rebondit de haut en bas, nous allons ajouter à notre jeu un plateau. Nous allons pouvoir déplacer le plateau de droiteà gauche. A l'étape suivante nous ferrons en sorte que la balle rebondisse sur le plateau. Mais pour le moment concentrons nous sur le dessin du plateau et les évènements claviers pour le déplacer.

A vous de jouer :

on va dessiner la plateau à chaque fois que l'on rafraichit le Canvas. Donc dans notre fonction displayGame()
on va créer une nouvelle fonction initGame() qui va reprendre l'initialisation du jeu déja présente dans le gestionnaire d'évènement DOMContentLoaded,
cette fonction initGame() va déclarer notre gestionnaire d'évènements quand nous appuyons sur le clavier. Nous pourrions appeler ce gestionnaire keyboardEvent()
si on appuie sur la flèche droite la position x du plateau est incrémentée de quelques pixels et ne dépasse pas le bord droit du Canvas,
si on appuie sur la flèche gauche la position x du plateau est décrémentée de quelques pixels et ne dépasse pas le bord gauche du Canvas
Astuce : On peut créer un objet paddle représentant le plateau avec comme propriété :

sa position X,
sa position Y,
sa vitesse de déplacement (nombre de pixels de déplacement à chaque appuie sur une touche),
sa couleur,
sa largeur,
sa hauteur,
sa direction (-1 gauche, 1 droite, 0 stop)
Pour le déplacement du plateau on va considérer que :

si la touche droite est enfoncé le plateau se déplacera à droite,
si elle est relachée le plateau ne se déplace plus
idem pour la touche gauche. Notre gestionnaire d'évènement clavier va changer la direction du plateau en fonction que l'on appuie ou relache la touche et c'est dans la fonction playGame() que le plateau sera déplacé.*/