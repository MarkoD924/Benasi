<?php  
require_once(dirname(__FILE__) ."/../vendor/autoload.php");

use app\Controllers\HomeController;
use app\Controllers\UserController;
use app\core\Application;

$app=new Application();

$app->router->get("/getUser", [UserController::class,"readUser"]);
$app->router->get("/", [HomeController::class,"home"]);

$app->run();