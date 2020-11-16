<?php
include $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
include ROOT_DIR . "services/Autoloader.php";


spl_autoload_register([new \app\services\Autoloader(), 'loadClass']);

$products = (new \app\models\Product())->getAll();

$product = (new \app\models\Product())->getById(2);

$product = new \app\models\Product();

var_dump($products);
