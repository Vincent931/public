import Animal from "./Animal.js";
class Panda extends Animal {
    constructor(surnom, age, taille){
        super();
    }
    grimper(){
        this._text = "Les pandas grimpent";
        return this._text;
    }
    rouler(){
        this._text = "Les pandas roulent";
        return this._text;
    }
    courir(){
        this._text = "Les pandas courrent";
        return this._text;
    }
}


export default Panda;