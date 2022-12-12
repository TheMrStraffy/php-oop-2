<?php 
class Toy extends Product{
  public $feature;

  public function __construct($_id,$_name,$_brand,Category $_category, $_price,$_isAvailable,$_image, $_feature)
  {
    parent::__construct($_id,$_name,$_brand,$_category, $_price,$_isAvailable,$_image);
    $this->feature = $_feature;
  }
}
?>