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

use HomeBuilding\Controller\HomePlans;
$home = new HomePlans(111, 222);
$swing = $home->getPlanSwing();
$squareFoot = $home->getPlanSquareFoot();

echo "Swing: $swing \nSquare Foot: $squareFoot\n";

