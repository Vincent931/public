
class Zoo{
    constructor(){
        this._animal = [];
        this._animaux = [];
        this._current = [];
        this._bouton = [];
    }
    get animaux(){
        return this._animaux;
    }
    set animaux(animaux){
        this._animaux = animaux;
    }
    get animal(){
        return this._animal;
    }
    set animal(animal){
        this._animal = animal;
    }
    get current(){
        return this._current;
    }
    set current(current){
       this._current = current;
    }
    get timer(){
        return this._timer;
    }
    set timer(timer){
       this._timer = timer;
    }
    get bouton(){
        return this._bouton;
    }
    set bouton(bouton){
       this._bouton = bouton;
    }
    get jouer(){
        return  this._jouer;
    }
    set jouer(animal){
        this._jouer = "Les" + this._animal + "jouent";
    }
    get dormir(){
        return  this._dormir;
    }
    set dormir(animal){
        this._dormir = "Les" + this._animal + "dorment";
    }
    get instruction(){
        return  this._instruction;
    }
    set instruction(animal){
        this._instruction = "Les" + this._animal + "attendent les instructions";
    }
}
export default Zoo;