<?php
spl_autoload_register(
    function ($class) {
        $file = str_replace('\\', '/', $class) . '.php';
        require __DIR__ . '/' . $file;
    }
);
use Doug\Test\GuestEntity;
$guest = new GuestEntity('Jack', 'Ryan', 'Secret Agent');	
echo get_class($guest) . "\n";
var_dump(get_class_methods($guest)) . "\n";
var_dump(get_object_vars($guest)) . "\n";
var_dump(get_class_vars(GuestEntity::class)) . "\n";
var_dump($guest->getArrayCopy()) . "\n";
