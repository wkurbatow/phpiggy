<?php
declare(strict_types= 1);
error_reporting(E_ERROR | E_WARNING | E_PARSE);

ini_set("memory_limit","512M");
include __DIR__ ."/../src/App/functions.php";
$app = include __DIR__ ."/../src/App/bootstrap.php";


# var_dump($_SERVER);
$app->run();




