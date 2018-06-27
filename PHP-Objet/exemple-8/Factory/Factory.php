<?php

namespace Factory;

class Factory
{
	public static function create()
	{
		$className = "Form\\" . ucfirst($name) . "Item";

		if(class_exists($className))
		{
			return new $className;
		}

		echo "Création d'un objet " . $className . "<hr>";
		return null;
	}
}
