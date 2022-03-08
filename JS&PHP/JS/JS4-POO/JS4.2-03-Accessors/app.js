/*
# Les accesseurs

- Reprenez l'exercice précédent et modifier la `class User` afin d'y ajouter
des accesseurs (`get`, `set`).
- On doit pouvoir ajouter ou modifier un `job`  
- On doit pouvoir lire `job`.
- Console loguer les résultats.
*/
import User from "./modules/User.js";

let user = new User();

console.log(typeof(user.setJob));
user.setJob('JavaScript');
console.log(user.getJob());