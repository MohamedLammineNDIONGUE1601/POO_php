<?php

require 'Habitation.php';
require 'TraitHabitation.php';

class Caravane extends habitation {
    use TraitHabitation;

}

$caravane = new Caravane();
echo $caravane->deplacer();