<?php

// Autoload
spl_autoload_register(function ($className) {
	$className = str_replace('\\', '/', $className); // remplacer les \ par des /
	if (file_exists($className . '.php')) {
		require_once($className . '.php');
	}
});

// Singleton
$singleton = \Singleton\Singleton::getInstance('NOM');
$singleton2 = \Singleton\Singleton::getInstance('NOM');
