<?php 
require_once './models/User.php';
require_once './views/HomeView.php';
require_once './views/UserView.php';
require_once './repository/UserRepository.php';

class UserController {
    
    public function __construct()
    {
        $this->user = new User();
    }
    //renvoie la vue account
    public function accountUser(): void
    {
        
        //si l'utilisateur n'est pas connecté
        if(!isset($_SESSION['access']) OR $_SESSION['access'] != true)
        {
            $this->connectUser();
            die();
        }
        $view = new UserView();
        $this->user = unserialize($_SESSION['user']);
        $view->displayAccount($this->user);
    }
    
    //renvoie le formulaire d'inscription
    public function inscriptForm(): void
    {
        $view = new UserView();
        $view->inscriptForm();
    }
    
    //insère un user
    public function inscriptInsertUser() :void
    {
        //verification jeton de securité
        if($_POST['csrf'] !== $_SESSION['csrf'])
        {
            $error = ['error' => "Error Grave, contactez votre administrateur ...", 'href' => "./index.php?action=connect", 'lien' => "Rééssayer"];
            $this->view = new HomeView();
            $this->view->showError($error);
            die();
        }
        $this->user->setName(htmlspecialchars($_POST['name']));
        $this->user->setFirstName(htmlspecialchars($_POST['first_name']));
        $this->user->setEmail(htmlspecialchars($_POST['email']));
        $variables = array();
        $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_BCRYPT);
        $role = 'user';
        $variables = array();
        $variables[] = $password;  $variables[] = $role;
        $repository = new UserRepository();
        $results = $repository->insertUser($this->user, $variables);

        if($results)
        {
             $success = ['message' => "Opération OK...", 'href' => "./index.php?action=connect", 'lien' => "Se connecter"];
             $this->view = new HomeView();
             $this->view->showSuccess($success);
             die();
        } else {
            $error = ['error' => "Erreur insertion, essayez de recommencer...(mais votre compte est peut-être déjà existant)", 'href' => "./index.php?action=inscription", 'lien' => "Réessayer"];
            $this->view = new HomeView();
            $this->view->showError($error);
            die();
        }
    }
    
    //renvoie formulaire connexion
    /**
     * @param $message string
     */
    public function connectUser($message = ""): void
    {
    $view = new UserView();
    $view->connectForm($message);
    }
    
    //valide la connexion
    public function validForm(): void 
    {
        //verification jeton de securité
        if($_POST['csrf'] !== $_SESSION['csrf'])
        {
            
            $error = ['error' => "Error Grave, contactez votre administrateur ...", 'href' => "./index.php?action=connect", 'lien' => "Rééssayer"];
            $this->view = new HomeView();
            $this->view->showError($error);
            die();
        }
        
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $repository = new UserRepository();
        $data = $repository->fetchUser($email, $password); 
        if($data){
            if(password_verify($password, $data['password']))
            {
                $_SESSION['access'] = true;
                $this->user->setName($data['name']);
                $this->user->setFirstName($data['first_name']);
                $this->user->setEmail($data['email']);
                $this->user->setRole($data['role']);
                $this->user->setCreatedAt($data['dateCr']);
                $this->user->setUpdatedAt($data['dateUp']);
                $_SESSION['user'] = serialize($this->user);
                $success = ['message' => "Vous êtes connecté", 'href' => "./index.php?action=account", 'lien' => "Valider"];
                $this->view = new HomeView();
                $this->view->showSuccess($success);
                die();
            } else {
                $error = ['error' => "Aucun compte, vérifier votre motdepasse ...", 'href' => "./index.php?action=connect", 'lien' => "Rééssayer"];
                $this->view = new HomeView();
                $this->view->showError($error);
                die();
            }   
        } else {
            $error = ['error' => "Aucun compte, vérifier votre motdepasse ...", 'href' => "./index.php?action=connect", 'lien' => "Rééssayer"];
            $this->view = new HomeView();
            $this->view->showError($error);
            die();
        }   
    }
}

