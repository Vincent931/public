class Panda {
    constructor(){
        this._mange = "";
        this._dors = "";
        this._text = "";
        this._stop = 0;
    }
    manger(){
        
        this._text = "Les pandas Mangent";
        return this._text;
    }
    dormir(){
        this._text = "Les pandas dorment";
        return this._text;
    }
    instruction(){
        this._text = "Attente instructions";
        return this._text;
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