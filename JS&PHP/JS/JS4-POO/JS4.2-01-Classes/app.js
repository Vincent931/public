/*
# Exercice 1

- Créer une classe `Request` et une méthode `getInputs` servant à récupérer 
les 'input' d'un formulaire que vous devez créer aussi (Deux 'input' suffiront).
- Le méthode `getInputs` fera simplement un console.log des valeurs du 
formulaire.
- Idéalement, Vous utiliserez un module pour cette classe.
- Vous devrez vous servir de la classe et de sa méthode ainsi : 
```javascript
// ...
let request = new Request();
// ...
request.getInputs(inputs)
*/
import Request from "./modules/Request.js";

let submit = document.getElementById('submit');

submit.addEventListener('click',function(event){

    let request = new Request();

    request.getInputs(document.getElementById("input").value);
    event.preventDefault();
})

