/**
 * Créer ici le projet bonus de calculatrice.
 */
for(i=0;i<1000;i++){
const operation = window.prompt("entrez une opération !(entrez 0 pour quitter)");
var total=eval(operation);
if(operation==0) break;
alert('Le résultat est : ' + total);
}