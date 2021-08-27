<?php

require_once __DIR__ . "/../base/localWarrior.php";


// 1/ Modifiez la variable globale warriorID dans le fichier students/warrior.php
$GLOBALS['warriorID'] = 'virginie';

// Définissez vos class de combattants
abstract class Warrior extends LocalWarrior {
    // 4/ La classe Warrior doit avoir les attributs (publics) $id, $name, $speed, $life, $shield, $imageUrl et $weapon
    public  $id;
    public  $name;
    public  $speed;
    public  $life;
    public  $shield;
    public  $imageUrl;
    public  $weapon;

    public function __construct($id) {
       
    }
};

// 2/ Les classes StartrekWarrior, MarvelWarrior et PokemonWarrior doivent être créées dans le ficher students/warrior.php
// extends
// StartrekWarrior extends Warrior
// glossaire : factoriser le code

class StartrekWarrior extends Warrior {
    //5/ Les classe StartrekWarrior, MarvelWarrior et PokemonWarrior doivent avoir respectivement les attributs $mentalPower, $superPower et $level
    public $mentalPower;

    public function power() {
        return $this->mentalPower;
    }

    // 7/ Les classes Warrior, StartrekWarrior, MarvelWarrior et PokemonWarrior doivent avoir des constructeurs
    public function __construct($id) {
       
    }
}

class MarvelWarrior extends Warrior {
    public $superPower;

    public function power() {
        return $this->superPower;
    }

    public function __construct($id) {
       
    }
}
class PokemonWarrior extends Warrior {
    public $level;

    public function power() {
        return $this->level;
        ;
    }

    public function __construct($id) {
       
    }
}

