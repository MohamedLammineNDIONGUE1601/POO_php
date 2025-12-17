<?php

class Personne {
    
    // création des attributs de l'objet
    private $nom;

    private $prenom;

    private $age;


    const BRAS = 2;
    public static $jambres = 2;

    // création des méthodes
    // ce sont les actions que peut faire l'objet.

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function parler() {
        return ' je parle';
    }

    public function manger() {
        return ' je mange';
    }

    public function marcher() {
        return ' je marche';
    }
} 

$personne = new Personne(); // instanciation de l'objet Personne
$personne->setNom('ndiongue');
$personne->setPrenom('mohamed lamine');
$personne->setAge(32);

// afficher les informations de l'objet personne
echo $personne->getNom(); // affiche ndiongue
echo ' ';
echo $personne->getPrenom(); // affiche mohamed lamine
//Affiher un espace entre le prénom et l'âge 
echo ' ';
echo $personne->getAge(); // affiche 32

echo ' ';
echo 'ans';

echo Personne::BRAS;
//Personne::$jambes = 4;

//echo Personne::$jambres;