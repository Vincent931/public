/**
 * Créer ici le projet « Hello You ».
 */
const userPrenom = window.prompt("Quel est votre prénom ?");
alert('Bonjour ' + userPrenom);

/*Hello You
Nous allons construire ensemble un programme capable de vous saluer avec votre prénom.

Pour cela, nous allons d'aboir devoir apprendre à interagir avec l'utilisateur.

window.prompt
Jusqu'à maintenant, nous ne connaissons qu'une seule fonction : console.log. Apprenons-en une deuxième :

const userAge = window.prompt("Quel âge avez-vous ?");
console.log(userAge);
Si vous exécutez cette instruction, votre navigateur va ouvrir une petite fenêtre avec un champ de texte en vous posant cette question « Quel âge avez-vous ? » Vous allez entrer par exemple « 22 » dans le champ, valider, et la console affichera alors "22".

window.prompt a pour fonction de demander quelque chose à l'utilisateur, et de renvoyer la réponse ainsi reccueillie sous forme de String. Ici nous stockons directement cette valeur de retour dans la variable userAge pour ensuite l'afficher.

window.prompt renvoie toujours, toujours une String. Même si l'utilisateur entre le nombre 12, window.prompt renverra en fait la chaîne "12".

Cette information aura son importance en temps voulu. Vous n'en aurez pas besoin pour cet exercice.

C'est à vous !
Nous voulons un programme qui demande à l'utilisateur son prénom, disons par exemple « Jacques », pour ensuite afficher dynamiquement dans la console "Salut Jacques !".

Petit indice : vous allez avoir besoin de concaténer des Strings.

Bonus
Petit bonus pour les élèves ayant terminé un peu trop rapidement cet exercice.

Grâce à window.prompt, demandez à l'utilisateur d'entrer un calcul, par exemple 4 + 12. Dans la console, vous afficherez ensuite deux choses :

Le calcul que l'utilisateur a entré, facile ;
Le résultat du calcul, moins drôle !
Bonne chance !*/

