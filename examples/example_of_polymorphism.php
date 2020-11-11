<?php
// this assumes "HomeBuilding" is a directory off the current dir
define('SRC_CODE_DIR', __DIR__);
spl_autoload_register(function ($class) {
	$sep = DIRECTORY_SEPARATOR;
	$fn = str_replace('\\', $sep, $class);
	$fn = SRC_CODE_DIR . $sep . $fn . '.php';
	$fn = str_replace($sep . $sep, $sep, $fn);
	require_once $fn;
});

use HomeBuilding\Controller\Plans;
use HomeBuilding\Controller\PlansInterface;
use HomeBuilding\Controller\HomePlans;
$home = new HomePlans(111, 222);

function test(PlansInterface $obj)
{
	return $obj->getPlanSquareFoot();
}

echo test($home);
