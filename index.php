<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('ClassProduct.php');
require_once('ProductController.php');
require_once('CustomerController.php');

$customerControllerObj = new CustomerControllerClass('customer');

$customerControllerObj2 = new CustomerControllerClass('products');


$customers = $customerControllerObj->getCustomer();
echo'<pre>';
var_dump($customers);
echo '</pre>';

echo '<br />============================ <br />';
$products = $customerControllerObj2->getCustomer();
echo'<pre>';
var_dump($products);
echo '</pre>';

//$cus=$conn->update('customer', ["email@ulbs.ro", 3]);
//$cus=$conn->delete('customer', 2);


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
