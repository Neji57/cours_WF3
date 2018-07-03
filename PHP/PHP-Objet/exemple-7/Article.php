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

	// Appelée lors de la conversion de l'objet en chaîne 
	public function __toString()
	{
		return $this -> name;
	}

	// Lors de l'appel de la méthode isset ou empty sur une propriété
	public function __isset($name)
	{
		echo "L'attribut " . $name . " est testé <hr>";
		return false;
	}

	// Lors d'une linéaeisation
	public function __sleep()
	{
		echo "Linéarisation <hr>";
		return ["name"];
    }

    // Lors d'une délinéarisation
    public function __wakeup()
    {
        echo "Délinéarisation <hr>";
	}
	
	// Lors de l'utilisation de l'objet comme méthode
	public function __invoke()
	{
		echo "Utilisation de l'objet comme méthode <hr>";
	}



	public function getName()
	{
		return $this -> name;
	}

	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}
}