<?php 
class Accessory extends Product{
  public $material;

  public function __construct($_id,$_name,$_brand,Category $_category, $_price,$_isAvailable, $_material)
  {
    parent::__construct($_id,$_name,$_brand,$_category, $_price,$_isAvailable);
    $this->material = $_material;
  }
}
?>