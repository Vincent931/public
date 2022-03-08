class Animal{
    constructor(surnom, age, taille){
        this._text = "";
        this._surnom = surnom;
        this._age = age;
        this._current = [];
        this._button = [];
        this._timer = [];
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
    get button(){
        return this._button;
    }
    set button(button){
        this._button = button;
    }
    get timer(){
        return this._timer;
    }
    set timer(timer){
        this._timer = timer;
    }
    get current(){
        return this._current;
    }
    set current(current){
        this._current = current;
    }
    get buttonLength(){
        return this._buttonLength;
    }
    set buttonLength(buttonLength){
        this._buttonLength = buttonLength;
    }
}
export default Animal;