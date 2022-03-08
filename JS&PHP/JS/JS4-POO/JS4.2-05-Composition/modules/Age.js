
class Age{
    constructor(valeur){
        this._valeur =valeur;
    }
    get valeur(){
        return this._valeur;
    }
    set valeur(valeur){
        if(Number(valeur) && (valeur<0 || valeur>125)) {
            this._valeur = valeur;
        } else {
            return -0;
        }
    }
}
export default Age;