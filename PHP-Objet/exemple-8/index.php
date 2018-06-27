<?php

// Autoload
spl_autoload_register(function ($className) {
	$className = str_replace('\\', '/', $className); // remplacer les \ par des /
	if (file_exists($className . '.php')) {
		require_once($className . '.php');
	}
});

use Singleton\Singleton;

// Singleton
$singleton = Singleton::getInstance('NOM');
//$singleton = \Singleton\Singleton::getInstance('NOM');
