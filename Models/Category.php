<?php 
class Category{
  public $name;
  public $icon;

  public function __construct($_name)
  {
    $this->name = $_name;
  }

  public function getIcon(){
    if($this->name == 'dog'){
      $_icon = 'https://freepngimg.com/download/temp_png/98032-shiba-inu-doge-meme-picture.jpeg';
      return $this->icon = $_icon;
    } else if ($this->name == 'cat'){
      $_icon = 'https://i.pinimg.com/originals/6c/da/44/6cda4405bc68c5595409dd67a2703d08.jpg';
      return $this->icon = $_icon;
    } else {
      $_icon = 'Not Available';
      return $this->icon = $_icon;
    }
  }
}
?>