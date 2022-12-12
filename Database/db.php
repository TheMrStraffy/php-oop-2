<?php 
 require_once __DIR__ ."/../Models/Category.php";
 require_once __DIR__ ."/../Models/Product.php";
 require_once __DIR__ ."/../Models/Food.php";
 require_once __DIR__ ."/../Models/Toy.php";
 require_once __DIR__ ."/../Models/Accessory.php";



$bone = new Food('alpha-spirit','Alpha Spirit','Aspirit',new Category('dog'),2.79,true,280,'Ossa Di Prosciutto','Maiale');
$bone->getProductImage('https://shop-cdn-m.mediazs.com/bilder/alpha/spirit/osso/intero/di/prosciutto/6/400/68444_pla_alphaspirit_schin_6.jpg');
$bone->category->getIcon();
var_dump($bone);

$felix = new Food('le-ghiottonerie','Le Ghiottonerie','felix',new Category('cat'),0.76,true,85,['Carni e Derivati(12%)','Estratti di proteine vegetali','Pesci e sottoprodotti dei pesci(salmone 4%)','Sostanze minerali','Zuccheri'],'Salmone');
$felix->getProductImage('https://www.purinashop.it/media/catalog/product/cache/c4218f1997800f206b38e4323d8d1cf4/0/7/07613287484147_c1n1_44102442.jpg');
$felix->category->getIcon();
var_dump($felix);


?>