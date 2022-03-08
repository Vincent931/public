let random = Math.floor(Math.random() * 100);

console.log(random);

let compteur = 0;

for(let i=0;i<random; i++){
    compteur++;
}

alert('Le chiffre de random est : ' + compteur + ', Trouvé sans égalité directe ');