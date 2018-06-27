<?php

namespace Singleton;

class Singleton
{
	private static $instance;

	private function __construct($name)
	{
		echo "Création du Singleton " . $name . "<hr>";
	}

	public static function getInstance($name)
	{
		if(self::$instance == null)
		{
			self::$instance = new Singleton($name);
		}
		return self::$instance;
	}
}
