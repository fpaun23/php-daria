<?php 

class Product implements ProductInterface{
    public $price;

    public function setPrice($price) {
        $this->price = $price;
      }
     public function getPrice() {
        return $this->price;
      }
    public function printPrice(){
       echo ('$price'); 
      }
}


?>