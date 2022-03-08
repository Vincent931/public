class User{
    constructor(){
        this.job = 'defaultJob'
    }
    fullname(name, firstName) {
        console.log('Bonjour '+ name + firstName);
    }
    setJob(working){
        this.job = working;
    }
    getJob(){
       return this.job;
    }
}
export default User;