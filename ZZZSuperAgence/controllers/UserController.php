<?php 
require_once './models/User.php';
require_once './service/MyError.php';
require_once './service/Success.php';
require_once './views/UserView.php';
require_once './repository/UserRepository.php';
require_once './service/Authenticator.php';

class UserController {
    
    public function __construct()
    {
        $this->user = new User();
    }
    //renvoie la vue account
    public function accountUser(): void
    {
        //si user est connecté
        $authenticator = new Authenticator();
        $user = $authenticator->authUser();
        if($user !== null){
        $view = new UserView();
        $this->user = $authenticator->getUser();
        echo $view->displayAccount($this->user);
        } else{
            header('Location: ./index.php?action=connect');
        }
    }
    
    //renvoie le formulaire d'inscription
    public function inscriptForm(): void
    {
        $view = new UserView();
        echo $view->inscriptForm();
    }
    
    //insère un user
    public function inscriptInsertUser() :void
    {
        //verification jeton de securité
        if($_POST['csrf'] !== $_SESSION['csrf']){
            $arrayFailed = ['message' =>'', 'href' => '', 'lien' => '', 'type' =>''];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }
        $this->user->setName(htmlspecialchars($_POST['name']));
        $this->user->setFirstName(htmlspecialchars($_POST['first_name']));
        $this->user->setEmail(htmlspecialchars($_POST['email']));
        $variables = array();
        $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_BCRYPT);
        $role = 'user';
        $arrayPassRole = array();
        $arrayPassRole[] = $password;  $arrayPassRole[] = $role;
        $repository = new UserRepository();
        $results = $repository->insertUser($this->user, $arrayPassRole);

        if($results){
            $success = ['message' => "Opération OK...", 'href' => "./index.php?action=connect", 'lien' => "Se connecter"];
            $succes = new Success($success);
            $succes->manageSuccess();
        } else {
            $arrayFailed = ['message' =>'Erreur, ID Déjà existant ?', 'href' => './index.php?action=inscription', 'lien' => 'Réessayer', 'type' => 'other'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }
    }
    
    //renvoie formulaire connexion
    /**
     * @params ?string $message
     */
    public function connectUser($message = ""): void
    {
        $view = new UserView();
        echo $view->connectForm($message);
    }
    
    //valide la connexion
    public function validFormConnect(): void 
    {
        //verification jeton de securité
        if($_POST['csrf'] !== $_SESSION['csrf']){
            $arrayFailed = ['message' =>'Erreur Grave veuillez contacter l\'administrateur', 'href' => '.index.php?action=connect', 'lien' => 'Réessayer', 'type' => 'other'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }
        
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $repository = new UserRepository();
        $data = $repository->fetchUser($email);
        
        if($data){
            
            if(password_verify($password, $data['password'])){
                $_SESSION['access'] = true;

                $authenticator = new Authenticator();
                $this->user->setUserByData($data);
                $authenticator->addUserInSession($this->user);
                $view = new UserView();
                echo $view->displayAccount($this->user);

            } else {
                $arrayFailed = ['message' =>'Erreur veuillez remplir les champs exactement comme attendu - (?mot de passe?)', 'href' => './index.php?action=connect', 'lien' => 'Réessayer', 'type' => 'other'];
                $erreur = new MyError($arrayFailed);
                $erreur->manageFailed();
            }   
        } else {
            $arrayFailed = ['message' =>'Erreur (?compte existe?)', 'href' => './index.php?action=connect', 'lien' => 'Réessayer', 'type' => 'other'];
            $erreur = new MyError($arrayFailed);
            $erreur->manageFailed();
        }   
    }
}

