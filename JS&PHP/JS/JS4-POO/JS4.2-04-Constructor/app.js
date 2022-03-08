/*
# Le constructeur

- Reprenez la `class User` et la modifier pour qu'on ait un constructeur 
qui assigne `name` et `firstName`
- Ajoutez `job `au constructeur mais rendez-le optionnel.
- Vous devrez rechercher comment rendre un argument optionnel.
- Modifiez la méthode `fullName` en conséquence.
- Console loguer le résultat.
*/
import User from "./modules/User.js";

let user = new User('vincent', 'nguyen');

console.log(user.fullName());

user.job = 'JavaScript';
console.log(user.job);
