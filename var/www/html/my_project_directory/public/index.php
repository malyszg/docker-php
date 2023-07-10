<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';
/*
$mysql = new PDO('mysql:host=mydb', 'root', 'root');
$query = $mysql->query('SELECT VERSION()');
$version = $query->fetch();
echo "WERSJA MYSQL " . $version[0].PHP_EOL;
*/

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
