<?php 
 require_once __DIR__ ."/../Models/Product.php";
 require_once __DIR__ ."/../Models/Category.php";
 require_once __DIR__ ."/../Models/Food.php";
 require_once __DIR__ ."/../Models/Toy.php";
 require_once __DIR__ ."/../Models/Accessory.php";


 $product1 = new Product('first','osso','canicomodi',new Category('cane','not available'),100,true,'Image Not Available');
 var_dump($product1);

  echo $product1->getProductDetails();
?>