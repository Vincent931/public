<?php
require_once './views/EmailView.php';
require_once './models/EmailContact.php';
require_once './service/MyError.php';
require_once './service/Success.php';

class EmailController{
     //renvoie la page contact
     public function contact(): void
     {
          $view = new EmailView();
          echo $view->viewcontact();
     }
     //envoie un email avec PHPMailer(error 504 sur l'IDE)
     public function email(): void
     {
        $emailfrom = htmlspecialchars($_POST['email']);
        $content = htmlspecialchars($_POST['content']);
        //ce code ne fonctionne pas sur l'IDE mais en local ça fonctionne
        /*$email = new EmailContact($emailfrom, $content);
        $email->constructEmail();
        $valid = $email->sendEmailContact();*/
        //pour simuler une validation ok (a effacer en local)
        $valid = true;
        
        if($valid){
          $success = ['message' => 'Insertion OK', 'href' => "./index.php?action=accueil", 'lien' => "Aller à l'accueil maintenant"];
          $succes = new Success($success);
          $succes->manageSuccess();

        } else {
               $arrayFailed = ['message' =>'Erreur Grave veuillez contacter l\'administrateur', 'href' => './index.php?action=contact', 'lien' => 'Réessayer', 'type' => 'other'];
               $erreur = new MyError($arrayFailed);
               $erreur->manageFailed();
        }
     }
}    