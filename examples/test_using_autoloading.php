<?php
spl_autoload_register(
    function ($class) {
        $file = str_replace('\\', '/', $class) . '.php';
        require __DIR__ . '/' . $file;
    }
);
use Doug\Test\Test;
$test = new Test();
echo $test->getFullName();
