/*
# La composition

On a vu qu'un objet peut être composé en partie d'un autre objet.

- Dans notre `class User`, ajoutez un propriété. `age`.
- Cette propriété sera un objet qui possède ses propres propriétés.
- On ne peut en effet pas être agé de -10ans, et pas encore jusqu'à 150 ans...
- L'âge doit être un nombre, pas une 'string'.
- Console loguer le résultat.
*/
import User from "./modules/User.js";
import Age from "./modules/Age.js";

let user = new User('vincent', 'nguyen');

console.log(user.fullName());

user.age = new Age(59);

console.log(user.age.valeur);
console.log(user);
