class Dauphin {
    constructor(){
        this._mange = "";
        this._dors = "";
        this._text = "";
        this._stop = 0;
    }
    manger(){
        
        this._text = "Les dauphins Mangent";
        return this._text;
    }
    dormir(){
        this._text = "Les dauphins dorment";
        return this._text;
    }
    instruction(){
        this._text = "Attente instructions";
        return this._text;
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
}
export default Dauphin;
