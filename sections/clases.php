<?php
class Superhero
{
    //********************************** ANTES DE LAS PUBLIC PROPIERTES
    // public $name;
    // public $powers;
    // public $planet;

    // public function __construct($name, $powers, $planet)
    // {
    //     $this->name = $name;
    //     $this->powers = $powers;
    //     $this->planet = $planet;
    // }
    // *****************************
    public function __construct(public $name, public $powers, public $planet)
    {
    }


    public function atacar()
    {
        return "$this->name ataca con sus poderes!";
    }

    public function description()
    {
        return "$this->name es un superheroe de $this->planet y tiene los siguientes superpoderes: $this->powers";
    }
}

//PROMOTED PROPERTIES - ESPECIAL DE PHP8



$hero = new Superhero("Batman", "Fuerza, volar", "Marte");

echo $hero->atacar();
echo "\n";
echo $hero->description();
