<?php
// define autoloader
function load($class)
{
	$fn = str_replace('\\', DIRECTORY_SEPARATOR, $class);
	$fn = __DIR__ . DIRECTORY_SEPARATOR . $fn . '.php';
	require_once($fn);
}
spl_autoload_register('load');

use Doug\Test\Name;
use Doug\Test\Location;

$name = new Name();
$loc  = new Location();
echo $name->getName() . ' lives in ' . $loc->getLoc();
