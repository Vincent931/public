/*
# Les prototypes
- Convertissez notre `class User` en fonctions et prototypes.
- Ne vous cassez pas la tête à ajouter l'âge.
*/
function User() {};



User.prototype.name = function (get) {
     return this._name;
};

User.prototype.name = function (set) {
    return _name = this.name;
};

User.prototype.firsName = function (get){
    return this._firstName;
}
User.prototype.firsName = function (set){
    return this._firstName = firstName;
}
User.prototype.job = function (get){
    return this._job;
}
User.prototype.job = function (set){
    return this._job = job;
}
export default User;