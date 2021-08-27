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
    
    // 7/ Les classes Warrior, StartrekWarrior, MarvelWarrior et PokemonWarrior doivent avoir des constructeurs
    // 8/ Le constructeur de Warrior doit prendre en paramètre un $id et initialiser l'id, speed=30, life=100, shield=20
    public function __construct($id) {
        $this->id = $id;
        $this->speed = 30;
        $this->life = 100;
        $this->shield = 20;
    }
};

// 2/ Les classes StartrekWarrior, MarvelWarrior et PokemonWarrior doivent être créées dans le ficher students/warrior.php
// extends
// StartrekWarrior extends Warrior
// glossaire : factoriser le code

// 9/ Les constructeurs des sous classes de warrior doivent appeler le constructeur de Warrior et affecter $mentalPower = 8, $superPower = 100, $level = 1
class StartrekWarrior extends Warrior {
    //5/ Les classe StartrekWarrior, MarvelWarrior et PokemonWarrior doivent avoir respectivement les attributs $mentalPower, $superPower et $level
    public $mentalPower;

    public function power() {
        return $this->mentalPower;
    }

    public function __construct($id) {
        parent::__construct($id);
        $this->mentalPower = 8;
    }
}

class MarvelWarrior extends Warrior {
    public $superPower;

    public function power() {
        return $this->superPower;
    }

    public function __construct($id) {
        parent::__construct($id);
        $this->superPower = 100;
    }
}
class PokemonWarrior extends Warrior {
    public $level;

    public function power() {
        return $this->level;
        ;
    }

    public function __construct($id) {
        parent::__construct($id);
        $this->level  = 1;
    }
}

// 10/ Une classe Weapon doit être créée

class Weapon {
    
}
