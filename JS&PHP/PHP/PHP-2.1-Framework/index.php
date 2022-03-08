<?php 
class Personne{
     
     private $host = 'db.3wa.io';
	private $admin ='vincentnguyen';
     private $keypass ='688bdb47722bda92a8d43bfc2056efb0';
     private $base ='vincentnguyen_general';
     private $bdd =  new PDO('mysql:host='.$this -> $host.';dbname='.$this -> $base.';charset=utf8', $this -> $admin, $this -> $keypass);
     private $nom;
     private $prenom;
     private $email;
     private $age;
     private $adresse;
     private $ZIP;
     private $ville;
     
     public function setNom($nom){
          $this -> _nom = $nom;
     }
      public function setPrenom($prenom){
          $this -> _prenom = $prenom;
     }
      public function setEmail($email){
          $this -> _email = $email;
     }
      public function setAge($age){
          $this -> _age = $age;
     }
      public function setAdresse($adresse){
          $this -> _adresse = $adresse;
     }
      public function setZIP($ZIP){
          $this -> _ZIP = $ZIP;
     }
      public function setVille($ville){
          $this -> _ville = $ville;
     }
     public function getNom () {
          return $this -> _nom;
     }
      public function getPrenom () {
          return $this -> _prenom;
     }
      public function getEmail () {
          return $this -> _email;
     }
      public function getAge () {
          return $this -> _age;
     }
      public function getAdresse () {
          return $this -> _adresse;
     }
      public function getZIP () {
          return $this -> _ZIP;
     }
      public function getVille () {
          return $this -> _ville;
     }
     public function insert($nom, $prenom, $email, $age, $adresse, $ZIP, $ville){
          $req = $bdd->prepare('INSERT INTO personne nom=:nom, prenom=:prenom, email=:email, age=:age, adresse=:adresse, ZIP=:ZIP, ville=:ville');
          $req -> execute(array($nom, $prenom, $email, $age, $adresse, $ZIP, $ville));
          return 'OK';
     }
      public function select($id){
          $req = $bdd->prepare('SELECT * FROM personne WHERE id = ?');
          $req -> execute(array($id));
          $personne = $req ->fetch();
          return $personne;
     }
      public function update($nom, $prenom, $email, $age, $adresse, $ZIP, $ville, $id){
          $req = $bdd->prepare('UPDATE personne SET nom=:nom, prenom=:prenom, email=:email, age=:age, adresse=:adresse, ZIP=:ZIP, ville=:ville WHERE id =:id');
          $req -> execute(array('nom' => $nom,
          'prenom'=> $prenom,
          $email,
          $age,
          $adresse,
          $ZIP,
          $ville,
          $id));
          $personne = $req ->fetch();
          return $personne;
     }
     public function delete($id){
          $req = $bdd->prepare('DELETE FROM personne WHERE id = ?');
          $req -> execute(array($id));
          
          return 'OK';
     }
}