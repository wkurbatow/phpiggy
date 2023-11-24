<?php
ini_set("memory_limit","512M");
include __DIR__ ."/../src/App/functions.php";
$app = include __DIR__ ."/../src/App/bootstrap.php";

$app->run();

dd($app);


