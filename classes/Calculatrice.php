<?php

class Calculatrice {

    private $marque;

    private $type;

    private $niveau_scolaire;

    public function getMarque() {
        return $this->marque;
    }

    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getnScolaire() {
        return $this->niveau_scolaire;
    }

    public function setnScolaire($niveau_scolaire) {
        $this->niveau_scolaire = $niveau_scolaire;
    }

    public function additionner($num1, $num2) {
        return $num1 + $num2;
    }

    public function soustraire($num1, $num2) {
        return $num1 - $num2;
    }

    public function multiplier($num1, $num2) {
        return $num1 * $num2;
    }

    public function diviser($num1, $num2) {
        if ($num2 == 0) {
            return 'Erreur : Division par zéro';
        }
        return $num1 / $num2;
    }
}

$calculatrice = new Calculatrice(); // instanciation de l'objet Calculatrice
$calculatrice->marque = 'Casio';
$calculatrice->type = 'scientifique';
$calculatrice->niveau_scolaire = 'lycée';

echo $calculatrice->getMarque();
echo $calculatrice->getType();
echo $calculatrice->getnScolaire();

echo $calculatrice->additionner(11, 15); // Affiche 26
echo $calculatrice->soustraire(20, 5); // Affiche 15

