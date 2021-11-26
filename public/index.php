<?php

# 
require_once __DIR__.'/../vendor/autoload.php';

use app\controllers\AuthController;
use app\core\Application;
use app\controllers\TaxPayerController;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$app = new  Application(dirname(__DIR__));


$app -> router->get('/',[TaxPayerController::class,'home']);
$app -> router->get('/login',[AuthController::class,'login']);
$app -> router->post('/login',[AuthController::class,'login']);
$app -> router->get('/logout',[AuthController::class,'logout']);
$app -> router->post('/addtaxpayer',[TaxPayerController::class,'addTaxPayer']);
$app -> router->post('/updatetaxpayer',[TaxPayerController::class,'updateTaxPayer']);
$app -> router->get('/gettaxpayers',[TaxPayerController::class,'getTaxPayers']);
$app -> router->post('/singletaxpayer',[TaxPayerController::class,'singleTaxPayer']);
$app -> router->post('/deletetaxpayer',[TaxPayerController::class,'deleteTaxPayer']);
 



$app -> run();
