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
idem pour la touche gauche. Notre gestionnaire d'évènement clavier va changer la direction du plateau en fonction que l'on appuie ou relache la touche et c'est dans la fonction playGame() que le plateau sera déplacé.