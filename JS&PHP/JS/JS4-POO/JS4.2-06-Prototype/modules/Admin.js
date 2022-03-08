/*- Créer une `class Admin` qui hérite de la `class User` et qui 
- ajoute une méthode `canEditArticles`. 
- Cette méthode devra retourner `true`.*/
import User from "./User.js";
class Admin extends User {
    canEditArticles () {
        return true;
    }
}
export default Admin;