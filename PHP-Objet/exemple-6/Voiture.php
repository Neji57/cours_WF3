<?php

require_once('Vehicule.php');

class Voiture extends Vehicule
{

    public function __construct($couleur)
    {
        parent::__construct($couleur);
        $this -> type = "Voiture";
        $this -> estMotorise = true;
		$this -> nombrePortes = 5;
		$this -> nnombreRoues = 4;
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