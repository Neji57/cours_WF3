<?php

// Autoload
spl_autoload_register(function ($className) {
	$className = str_replace('\\', '/', $className); // remplacer les \ par des / mac OS X uniquement
	if (file_exists($className . '.php')) {
		require_once($className . '.php');
	}
});

