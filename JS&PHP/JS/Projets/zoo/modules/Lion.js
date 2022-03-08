class Lion {
    constructor(){
        this._mange = "";
        this._dors = "";
        this._text = "";
        this._stop = 0;
    }
    manger(){
        
        this._text = "Les lions Mangent";
        return this._text;
    }
    dormir(){
        this._text = "Les lions dorment";
        return this._text;
    }
    instruction(){
        this._text = "Attente instructions";
        return this._text;
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