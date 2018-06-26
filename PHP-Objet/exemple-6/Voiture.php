<?php

require_once('Vehicule.php');

class Voiture extends Vehicule
{

    public function __construct($couleur)
    {
        parent::__construct($couleur);
        $this -> type = "Voiture";
    }

    public function toString()
    {
        return "Voiture " . parent::toString();
        $this -> type = "Voiture";
    }

    public static function klaxonner()
    {
        echo "pouet !!!";
    }
}