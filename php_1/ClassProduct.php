<?php 

// class Product {

//     public int $price=99;
//     public string $name;

//     public function getPrice():int {
//         return $this->price;
//       }
    
//     public function printPrice():string {
//         return $this->price;
//        //echo 'Pretul:' . $this->price;
//       }

//     public function setPrice($price){
//       if($price<200){
//         $this->price=$price;
//       }

//    }
// }

require_once('ProductInterface.php');

class Product implements ProductInterface{

  public int $price=99;
  public string $name;

  public function setPrice(int $price): void
  {
    $this->price=$price;
  }
  public function getPrice(): int
  {
    return $this->price;
  }
  public function printPriceAndName():void
  {
    echo 
    '------------------<br/>
    Numele este:' .$this->name.'<br/>';
    echo
    'Pretul este:' .$this->price.'<br/>';
  }
  public function setName(string $name): void
  {
    $this->name=$name;
  }
  public function getName(): int
  {
    return $this->name;
  }
}


?>