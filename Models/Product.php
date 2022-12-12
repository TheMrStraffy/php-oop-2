<?php 
class Product{
  public $id;
  public $name;
  public $brand;
  public $category;
  public $price;
  public $isAvailable;
  public $image;

  public function __construct($_id,$_name,$_brand,Category $_category, $_price,$_isAvailable,$_image)
  {
    $this->id=$_id;
    $this->name=$_name;
    $this->brand=$_brand;
    $this->category=$_category;
    $this->price=$_price;
    $this->isAvailable=$_isAvailable;
    $this->image=$_image;
  }

  public function getProductDetails(){
    return "ID: $this->id | NAME: $this->name";
  }
}
?>