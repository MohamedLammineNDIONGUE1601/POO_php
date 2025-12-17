<?php

require_once 'config/autoload.php';

$client = new client();
echo $client->parler();

$personne = new Personne();
echo $personne->manger();