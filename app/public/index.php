<?php
require_once('SwitchRouter.php');
require_once('JavascriptExercise.html');
#echo "Requested URL: " . $_SERVER['REQUEST_URI'];
//phpinfo();

$uri = trim($_SERVER['REQUEST_URI'],'/');
$router = new SwitchRouter();
$router->route($uri);
