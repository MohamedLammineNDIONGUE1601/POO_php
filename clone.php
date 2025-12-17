<?php

require 'classes/client.php';

$client1 = new Client();
$client1->setNom('gerard');
$client1->setPrenom('dupont');
$client1->setAge(30);
$client1->setEmail('client1@gmail.com');
$client1->setId(2);

//Copie
$client2 = $client1;

$client2->setPrenom('jean');


//Clone
$client3 = clone($client1);
$client3->setNom('henri');

echo '<pre>';
print_r($client1);
print_r($client2);
print_r($client3);
echo '</pre>';

//On vérifie si les deux objets sortent de la même classe
if($client1 == $client2) {
    echo '$client1 et $client2 sortent de la même classe';
}

//On vérifie si les deux objets pointent vers le même objet
if($client1 === $client2) {
    echo '$client1 et $client2 pointent vers le même objet';
}else {
    echo '$client1 et $client2 ne pointent pas vers le même objet';
}

//On vérifie si l'objet est une instance d'une classe avec instanceof
if($client1 instanceof Client) {
    echo '$client1 est une instance de la classe Client';
}
