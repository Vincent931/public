/*
# Le constructeur

- Reprenez la `class User` et la modifier pour qu'on ait un constructeur 
qui assigne `name` et `firstName`
- Ajoutez `job `au constructeur mais rendez-le optionnel.
- Vous devrez rechercher comment rendre un argument optionnel.
- Modifiez la méthode `fullName` en conséquence.
- Console loguer le résultat.
*/
class User{
    constructor(name, firstName, job = null,){
        this._name = name;
        this._firstName = firstName;
        this._job = job;
    }
    get name(){
        return this._name;
    }
    get firstName(){
        return this._firsName;
    }
    get job(){
       return this._job;
    }
    set name(name){
        return (this._name = name);
    }
    set firstName(firstName){
        return(this._firstName = firstName);
    }
    set job(working){
        return (this._job = working);
    }
    fullName() {
        return this._name + ' --- ' + this._firstName;
    }
}
export default User;