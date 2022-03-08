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
//import Error from "./modules/Error.js";
import validateForm from "./modules/validateForm.js";



let submit = document.querySelector('button');

submit.addEventListener('click', function(e){
    e.preventDefault();
    
    let user = new User();
    
    let age = document.getElementById('age').value;
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    user.age = age;
    user.name = name;
    user.email = email;
    
    if(user.messageError == "" || user.messageError== undefined || user.messageError== null){
         validateForm();
    } else {
       alert(user.messageError);
    }
});
