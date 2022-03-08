class Error{
    constructor(type){
        this._type = type;
    }
    get message(){
       return this._message; 
    }
    set message(type){
        if(this._type == 'email'){
        this._message = 'type email invalide';
        } else if(this._type == 'age'){
            this._message = 'type age invalide';
        }
    }
}

export default Error; 