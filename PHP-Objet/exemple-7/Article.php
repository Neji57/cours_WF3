<?php

class Article
{
	private $name = "Nom";

	public function getData()
	{
		return "DATA";
	}
	// Appelée lors de l'instanciation
	public function __construct()
	{
		echo "Object Article créée <hr>";
	}

	// Appel"e lors de la dectruction (fin du script)
	public function __destruct()
	{
		echo "Object Article détruit <hr>";
	}

	// Appelée lors de l'appel d'une méthode
	public function __call($name, $attr)
	{
		if(strlen($name) == "getData")
		{
			trigger_error("La méthode " . $name . " n'existe pas, vouliez-vous dire getDate ?");
		}
		else
		{
			echo "Méthode " . $name . " appelée <hr>";
		}
	}

	// Pour une méthode statique
	public static function __callstatic($name, $attr)
	{
		echo "Méthode statique " . $name . " appelée <hr>";
	}

	// Appelée lors de la lecture d'une propriété inaccessible
	public function __get($name)
	{
		echo "Propriété " . $name . " est appelée <hr>";
		$method = 'get' . ucfirst($name);
		if(method_exists($this, $method))
		{
			return $this -> method();
		}
	}

	// Appelée lors de la modification d'une propriété inaccessible
	public function __set($name, $value)
	{
		echo "Propriété " . $name . " est modifiée <hr>";
		$method = 'set' . ucfirst($name);

		if(method_exists($this, $method))
		{
			return $this->$method($value);
		}
	}

	public function __tostring()
	{
		return $this -> name;
	}

	public function __isset($name)
	{
		echo "...";
		return false;
	}

	public function __sleep()
	{
		echo "Linéarisation <hr>";
		return false;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}
}