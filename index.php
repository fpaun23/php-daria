<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once('ClassProduct.php');
require_once('ProductController.php');
//echo 'index.php';

// $productsObj= new Product();
// $productsObj1 = new Product();
// $productsObj ->printPrice();
// $productsObj1->setPrice(200);

// $productsObj->setPrice(399);
//$price=$productsObj->getPrice();
//echo $price;

$productsControllerObj=new ProductController(100,'frigider');
// $productsControllerObj->manageProduct(11, 'prod1');
// $productsControllerObj->manageProduct(12, 'prod2');
// $productsControllerObj->manageProduct(13, 'prod3');
?>