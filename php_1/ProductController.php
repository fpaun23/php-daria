<?php
require_once('ClassProduct.php');
class ProductController{
    
    public function __construct(int $price, string $name)
    {    
        $this->manageProduct($price,$name);
    }

    public function manageProduct(int $price, string $name):void
    {
        // $productsObj=new Product();
        // $productsObj->setPrice(100);
        // $productsObj->setName('telefon');
        // $productsObj->printPriceAndName();

        // $productsObj=new Product();
        // $productsObj->setPrice(450);
        // $productsObj->setName('covor');
        // $productsObj->printPriceAndName();

        $productsObj=new Product();
        $productsObj->setPrice($price);
        $productsObj->setName($name);
        $productsObj->printPriceAndName();
        
    }

}
?>