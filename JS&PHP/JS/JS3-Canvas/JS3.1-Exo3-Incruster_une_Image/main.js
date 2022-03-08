/*# inscrustez une image

A l'aide du context2D vous incrustez une image dans le Canvas.

Pour obtenir cette image vous pouvez utilisez le service [http://lorempixel.com/400/200/animals/]


## Astuce :

La méthode `drawImage()` du context2D attend un noeud du dom de type image.
Donc soit vous avez une image dans votre page HTML et vous récupérer l'objet du Dom associé.
Soit vous créez directement un objet du DOM en JS. Mais il va falloir s'assurer que l'image est chargée avant de l'incruster dans le Canvas.

**Exemple :**
```JavaScript

// ...
let img = new Image();
img.src = 'http://lorempixel.com/400/200/animals/';

img.addEventLister('load', function () {
    //On place l'image
    ctx.drawImage(img, 10, 10);
});
```
*/
//let img = document.getElementById('img');

'use strict';


document.addEventListener('DOMContentLoaded', function () {

    // L'objet du DOM Canvas
    let canvasDom = document.querySelector('#canvas');

    // Le context utilisé avec Canvas qui donne accès aux librairies de manipulation 2D
    let ctx = canvasDom.getContext('2d');
    
    let img = new Image();
    
    img.src = 'https://image.shutterstock.com/image-photo/completely-white-american-staffordshire-terrier-600w-443824639.jpg';
    
    //charge l'image apres le DOM
    img.addEventListener('load', function () {
            //On place l'image
            ctx.drawImage(img, 10, 10);
    });

});
