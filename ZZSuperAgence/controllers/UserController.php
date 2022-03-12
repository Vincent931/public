<?php 
//include "./models/User.php";
//include "./views/HomeView.php";
//include "./repository/UserRepository.php";


class UserController {

    //renvoie user
    public function accountUser() :void{
        
        //si l'utilisateur n'est pas connecté
        if(!isset($_SESSION['access']) OR $_SESSION['access'] != true){
            $this->connectUser();
            die();
        }
        $repository = new UserRepository();
        $view = new Homeview();
        $view->displayAccount();
    }
    
    //renvoie l'insertion d'un user
    /**
     * @param $name string
     * @param $first_name string
     * @param $email string
     * @param $password string
     */
    public function inscriptInsertUser() :void{
    $name = htmlspecialchars($_POST['name']);
    $first_name =  htmlspecialchars($_POST['first_name']);
    $email =  htmlspecialchars($_POST['email']);
    $password =  htmlspecialchars($_POST['password']);
    $repository = new UserRepository();
    $results = $repository->insertUser($name, $first_name, $email, $password);

        if($results){
             $message = "Opération OK...";
             $href = "./index.php?action=index";
             $lien = "Valider";
             $this->showSuccess($message, $href, $lien);
             die();
        } else {
            $message = "Erreur insertion, essayez de recommencer...(mais votre compte est peut-être déjà existant)";
            $href = "./index.php?action=inscription";
            $lien = "Réessayer";
            $this->showError($message, $href, $lien);
            die();
        }
    }
    
    //renvoie formulaire connexion
    /**
     * @param $message string
     */
    public function connectUser($message = "") :void{
    $view = new HomeView();
    $view->connectForm($message);
    }
    
    //renvoie la page accueil
    public function validForm() :void {
    //route validation du formulaire
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $repository = new UserRepository();
    $data = $repository->fetchUser($email, $password); 
        
        if(password_verify($password, $data['password'])){
            $_SESSION['access'] = true;
            $message = "Vous êtes connecté";
            $href = "./index.php?action=accueil";
            $lien = "Valider";
            $this->showSuccess($message, $href, $lien);
            die();
        } else {
            $message = "Aucun compte, vérifier votre motdepasse ...";
            $href = "./index.php?action=connect";
            $lien = "Réassayer";
            $this->showError($message, $href, $lien);
            die();
        }
    }
    
    //renvoie le formulaire d'inscription
    public function formInscriptUser() :void{
        $view = new HomeView();
        $view->inscriptForm();
    }
    //renvoie page erreur
    /**
     * @param $error string
     * @param $href string
     * @param $lien string
     */
    public function showError($error, $href, $lien){
        $view = new HomeView();
        $view->showError($error, $href, $lien);
    }
    
    //renvoie page succes
    /**
     * @param $error string
     * @param $href string
     * @param $lien string
     */
     public function showSuccess($message, $href, $lien){
        $view = new HomeView();
        $view->showSuccess($message, $href, $lien);
    }
    
}

