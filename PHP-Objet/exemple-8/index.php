<?php

// Autoload
spl_autoload_register(function ($className) {
	$className = str_replace('\\', '/', $className); // remplacer les \ par des /
	if (file_exists($className . '.php')) {
		require_once($className . '.php');
	}
});

use Singleton\Singleton;
use Factory\Factory;

// Singleton
$singleton = Singleton::getInstance('NOM');
$singleton2 = Singleton::getInstance('NOM');
$formItem = \Factory\Factory::create("select");

// Si je n'utilise pas le use plus haut, il faut ajouter le chemin
//$singleton = \Singleton\Singleton::getInstance('NOM');
//$formItem = \Factory\Factory::create("select");