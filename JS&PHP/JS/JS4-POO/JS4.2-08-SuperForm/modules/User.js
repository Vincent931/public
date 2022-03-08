/*
# Le constructeur

- Reprenez la `class User` et la modifier pour qu'on ait un constructeur 
qui assigne `name` et `firstName`
- Ajoutez `job `au constructeur mais rendez-le optionnel.
- Vous devrez rechercher comment rendre un argument optionnel.
- Modifiez la méthode `fullName` en conséquence.
- Console loguer le résultat.
*/
import Error from "./Error.js";

class User{
    constructor(name, email, age){
        this._name = name;
        this._email = email;
        this._age = age;
    }
   
    get name(){
        return this._name;
    }
    get email(){
        return this._email;
    }
    get age(){
       return this._age;
    }
    error(){
        return new Error();
    }
    set error(type) {
        error._type = type;
    }
    set name(name){
        if(String(name)){
        this._name = name;
        }
    }
    set email(email) {
        if(/^(([^<>()[]\.,;:s@]+(.[^<>()[]\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/.test(email)){
        this._email = email;
        } else {
            error._type = "email";
        }
    }
    set age(age){
        
        if(Number(age) && age > 0 && age < 125){
            this._age = age;
        } else {
            error = "age";
        }
    }
    
}

export default User;