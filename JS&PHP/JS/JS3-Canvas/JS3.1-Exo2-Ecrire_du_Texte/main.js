/*# Dessiner un rectangle

A l'aide du context2D vous écrivez du texte dans le Canvas.

Nous allons écrire "Hello World !" avec 3 couleurs différentes.

1 couleurs pour 'Hello', une pour 'world' et une pour '!'

## Astuce :

Vous allez devoir placer les textes séparément et donc bien les placer avec une distance entre eux (5 pixels par exemple). 
Vous pouvez utiliser la méthode `measureText` pour connaitre la longueur du texte que vous allez écrire et donc savoir où placer le texte suivant (position en pixels).
*/
'use strict';

// Nous allons écrire "HELLO WORLD !" avec 3 couleurs différentes
document.addEventListener('DOMContentLoaded',function(){

    // L'objet du DOM Canvas
    let canvasDom = document.querySelector('#canvas');

    // Le context utilisé avec Canvas qui donne accès aux librairies de manipulation 2D
    let ctx = canvasDom.getContext('2d');
    
    // On définie la police de caractère pour tous les textes
    ctx.font = 'bold 50px Verdana';

    // Couleur pour écrire Hello
    ctx.fillStyle ='black';

    // On ecrit Hello (string, left, top)
    ctx.fillText('Hello', 100, 350);

    // Couleur pour écrire World
    ctx.fillStyle = '#2223F5';

    // On ecrit World et on se sert de la méthode `measureTexte` pour le place après Hello !
    ctx.fillText('world', 100 + ctx.measureText('Hello').width + 10, 350);

    // Couleur pour écrire !
    ctx.fillStyle = '#54D144';

    // On ecrit World et on se sert de la méthode `measureTexte` pour le place après Hello !
    ctx.fillText('!', 100 + ctx.measureText('Hello').width + 10 + ctx.measureText('world').width + 10, 350);
});