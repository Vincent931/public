/*En demandant à l'utilisateur trois choses d'affilée :

Un premier nombre ;
Un opérateur arithmétique (+, /, +, -) ;
Un second nombre.
Puis, dans la console du navigateur, on affiche un rappel du calcul complet, par exemple 23 / 100.

Puis, toujours dans la console, on affiche le résultat du calcul.

Un exemple pour récapituler le fonctionnement :

L'utilisateur arrive sur la page ;
L'utilisateur entre 6 dans un premier window.prompt ;
L'utilisateur entre * dans un deuxième window.prompt ;
L'utilisateur entre 10 dans un troisième window.prompt ;
La console affiche le calcul 6 * 10 ;
La console affiche le résultat 60 ;*/

let x = window.prompt('Entrez un premier chiffre : ');

while(isNaN(x)){
    window.alert('Not a Number, will yo return a number please ?');
    x = window.prompt('Entrez un premier chiffre : ');
}

let operator = window.prompt('Entrez un opérateur : ');

while(operator !=='*' && operator !== '.' && operator !== 'x' && operator !== '÷' && operator !== '/' && operator!== '+' && operator && '-'){
    window.alert('Not an operator, will yo return an operator please ?');
    operator=window.prompt('Entrez un opérateur : ');
}

let y = window.prompt('Entrez un deuxième chiffre : ');

while(isNaN(y)){
    window.alert('Not a Number, will yo return a number please ?');
    y=window.prompt('Entrez un deuxieme chiffre : ');
}

let total=0;

if(operator == '*'  || operator == '.' || operator == 'x'){
    total = Number(x) * Number(y);
} else if(operator == '/'|| operator=='÷'){
    total = Number(x) / Number(y);
} else if(operator == '+'){
    total = Number(x) + Number(y);
} else if(operator == '-'){
    total = Number(x) * Number(y);
}

document.write('<h1 style="color: green">Le résultat est : ' + total + '</h1>');
