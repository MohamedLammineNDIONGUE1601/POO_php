<?php
require 'Personne.php';

class ClientPlus extends Personne {

    public $id_client;

    public $email;

    //Méthode constructeur
    public function __construct($Nom, $Prenom, $age, $email, $id){
        
        $this->setNom($Nom);
        $this->setPrenom($Prenom);
        $this->setAge($age);
        $this->setEmail($email);
        $this->setId($id);

    }

    public function __destruct(){
        echo "l'objet a été destruit";
    }
    
    public function getId(){
        return $this->id_client;
    }

    public function setId($id){
        $this->id_client = $id;
    }

    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }

    public function acheter(){
        return "j'achète";
    }

    public function manger(){
        return parent::manger().' au restaurant';
    }
}

$Client = new ClientPlus("Ndaw", "Mamadou", 35, "tester@gmail.com", 1);
unset($Client);

echo "<br> l'objet vient d'être détruit";