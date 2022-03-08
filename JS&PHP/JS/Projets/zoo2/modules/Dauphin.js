import Animal from "./Animal.js";
class Dauphin extends Animal{
    constructor(surnom, age, taille){
        super();
    }
    jouer(){
        this._text = "Les dauphins jouent";
        return this._text;
    }
    siffler(){
        this._text = "Les dauphins sifflent";
        return this._text;
    }
    nager(){
        this._text = "Les dauphins nagent";
        return this._text;
    }
    set bouton(bouton){
        this._bouton = bouton;
    }
    get bouton(){
        return this._bouton;
    }
    set timer(timer){
        this._timer = timer;
    }
    get timer(){
        return this._timer;
    }
    set affiche(affiche){
       this._timer = timer; 
    }   
    get affiche(){
        return this._timer;
    }
    
}
export default Dauphin;
