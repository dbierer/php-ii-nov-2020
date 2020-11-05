<?php
spl_autoload_register(
    function ($class) {
        $file = str_replace('\\', '/', $class) . '.php';
        require __DIR__ . '/' . $file;
    }
);
use Doug\Test\UserEntity;
$user[] = new UserEntity('Jack' , 'Ryan');	
$user[] = new UserEntity('Monte' , 'Python');
$user[] = new UserEntity('James' , 'Bond');
var_dump($user);
