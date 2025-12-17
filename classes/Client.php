<?php
require 'Personne.php';

class Client extends Personne {

    public $id_client;

    public $email;

    
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

$Client = new Client();
$Client->setNom('Ndaw');
$Client->setPrenom('Mamadou');
$Client->setAge(35);
$Client->setId(1);
$Client->setEmail('tester@gmail.com');
$Client->manger();