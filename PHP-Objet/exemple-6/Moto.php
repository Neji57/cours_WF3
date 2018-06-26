<?php

require_once('Vehicule.php');

class Moto extends Vehicule
{
	public function __construct($couleur)
    {
        parent::__construct($couleur);
        $this -> type = "Moto";
	}
	
	public function toString()
    {
        return "Moto " . parent::toString();
        $this -> type = "Moto";
    }
}