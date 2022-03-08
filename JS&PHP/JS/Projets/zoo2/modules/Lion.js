import Animal from "./Animal.js";
class Lion extends Animal {
    constructor(surnom, age, taille){
        super();
    }
    rugir(){
        this._text = "Les lions Rugissent";
        return this._text;
    }
    chasser(){
        this._text = "Les lions chassent";
        return this._text;
    }
    courir(){
        this._text = "Les lions courrent";
        return this._text;
    }
}


export default Lion;