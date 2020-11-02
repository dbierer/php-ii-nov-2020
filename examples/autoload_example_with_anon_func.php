<?php
// define autoloader
spl_autoload_register(function ($class) {
	$fn = str_replace('\\', DIRECTORY_SEPARATOR, $class);
	$fn = __DIR__ . DIRECTORY_SEPARATOR . $fn . '.php';
	require_once($fn);
});

use Doug\Test\Name;
use Doug\Test\Location;

$name = new Name();
$loc  = new Location();
echo $name->getName() . ' lives in ' . $loc->getLoc();
