<?php

$namespaces = $configuration['autoload']['psr-4'];

function customAutoload(string $classname)
{
    echo PHP_EDL . $classname;
    require_once __DIR__ . "/src/$classname.php";

}
spl_autoload_register('customAutoload');

spl_autoload_register(function (string $classname) use ($namespaces) {     #added autoload function
    $path = __DIR__ . $classname . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});

$a = new Goose(15);
echo $a->fly();

$a = new Dog(14);
echo $a->getAge();
spl_autoload_register($a);

