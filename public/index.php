<?php 
use mvc\core\Application;

if(!defined("ROOT")) define('ROOT', dirname(dirname(__FILE__)));

$app = new Application();



$app->run();