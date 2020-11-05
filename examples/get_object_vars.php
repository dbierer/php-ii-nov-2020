<?php
spl_autoload_register(
    function ($class) {
        $file = str_replace('\\', '/', $class) . '.php';
        require __DIR__ . '/' . $file;
    }
);
use Doug\Test\UserEntity;
$user = new UserEntity('Jack' , 'Ryan');	
echo get_class($user) . "\n";
var_dump(get_class_methods($user)) . "\n";
var_dump(get_object_vars($user)) . "\n";
var_dump(get_class_vars(UserEntity::class)) . "\n";
var_dump($user->getArrayCopy()) . "\n";
