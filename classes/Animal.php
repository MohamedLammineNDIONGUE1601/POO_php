<?php

abstract class Animal {

    public function manger() {
        return "Je mange";
    }

    public function dormir() {
        return "Je dors";
    }
}

//$animal = new Animal();
//Cela que la classe ne peut plus d'avoir d'enfant
final class Chien extends Animal {
    public function manger() {
        return " Je mange des croquettes pour chien";
    }
}

class Chiot extends Chien {

}

class Chat extends Animal {

    final public function manger() {
        return " Je mange des croquettes pour chat";
    }

}

class Chaton extends Chat {

}

$chien = new Chien();
echo $chien->manger();

$chat = new Chat();
echo $chat->manger();

$chaton = new Chaton();
echo $chaton->manger();