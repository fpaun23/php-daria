<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('ClassProduct.php');
require_once('ProductController.php');
require_once('PDOConnectionClass.php');
require_once('CustomerController.php');

$conn=new PDOConnectionClass();
$conn->connect();
$pdo=new CustomerControllerClass($tb);
$customer=$pdo->getCustomer('customer');
//$customer=$conn->get('customer');
//$customerUpdatedState=$conn->update('customer', ['nest@yahoo', 1]);
//$insert_customer=$conn->insert('customer', ['nesting@yahoo']);
//$deleteCustomer=$conn->delete('customer', 1);
// echo'<pre>';
// var_dump($insert_customer);
// echo '</pre>';

// echo'<pre>';
// var_dump($customerUpdatedState);
// echo '</pre>';

// echo'<pre>';
// var_dump($customer);
// echo '</pre>';



//echo 'index.php';

// $productsObj= new Product();
// $productsObj1 = new Product();
// $productsObj ->printPrice();
// $productsObj1->setPrice(200);

// $productsObj->setPrice(399);
//$price=$productsObj->getPrice();
//echo $price;

//$productsControllerObj=new ProductController(100,'frigider');
// $productsControllerObj->manageProduct(11, 'prod1');
// $productsControllerObj->manageProduct(12, 'prod2');
// $productsControllerObj->manageProduct(13, 'prod3');
