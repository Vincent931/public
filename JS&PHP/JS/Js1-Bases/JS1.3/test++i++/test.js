let i=1;

/*let a=0;
let b=0;*/

function howIsILeft(){
    alert(a=++i);
}

function howIsIRight(){
    alert(b=i++);
}

howIsILeft();
howIsIRight();

/*Ca ne sert à rien le ++i ou le i++, la left value ne s'applique pas !*/