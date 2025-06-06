<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/controllers/FrontController.php';




use RapiExpress\FrontController; 

$c = $_GET['c'] ?? 'auth';
$a = $_GET['a'] ?? 'login';

$frontController = new FrontController();
$frontController->handle($c, $a);
