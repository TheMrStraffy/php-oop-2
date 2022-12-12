<?php 
 require_once __DIR__ ."/../Models/Category.php";
 require_once __DIR__ ."/../Models/Product.php";
 require_once __DIR__ ."/../Models/Food.php";
 require_once __DIR__ ."/../Models/Toy.php";
 require_once __DIR__ ."/../Models/Accessory.php";



$bone = new Food('alpha-spirit','Alpha Spirit','Aspirit',new Category('dog'),2.79,true,280,['Ossa Di Prosciutto'],'Maiale');
$bone->getProductImage('https://shop-cdn-m.mediazs.com/bilder/alpha/spirit/osso/intero/di/prosciutto/6/400/68444_pla_alphaspirit_schin_6.jpg');
$bone->category->getIcon();
// var_dump($bone);

$felix = new Food('le-ghiottonerie','Le Ghiottonerie','felix',new Category('cat'),0.76,true,85,['Carni e Derivati(12%)','Estratti di proteine vegetali','Pesci e sottoprodotti dei pesci(salmone 4%)','Sostanze minerali','Zuccheri'],'Salmone');
$felix->getProductImage('https://www.purinashop.it/media/catalog/product/cache/c4218f1997800f206b38e4323d8d1cf4/0/7/07613287484147_c1n1_44102442.jpg');
$felix->category->getIcon();
// var_dump($felix);

$duck = new Toy('duck','Duck','HUNTER',new Category('dog'),12,true,['Realizzato con tessuto antiscivolo','Bordi esterni rafforzati per renderlo più resistente','Divertente fischietto interno','Ideale per il gioco del riporto'], 36);
$duck->getProductImage('https://d2oqznxcujm0s2.cloudfront.net/it_it%2Fpeluche-kolding-anatra-per-cani%2F7285%2Fblur-0-9470fd5b-78ab-4e33-80f5-6edd6069c302.jpeg');
$duck->category->getIcon();
// var_dump($duck);

$feather = new Toy('feather-toy','Feather Toy','ZooPlus', new Category('cat'),1.49,true,['gioco per gatti','per intrattenere il gatto facendolo giocare
','piume vere: colorate, stimolano il gatto a catturarle
','pellicola frusciante: emette un rumore divertente quando la cannetta viene sventolata','bastoncino flessibile in plastica'],60);
$feather->getProductImage('https://shop-cdn-m.mediazs.com/bilder/cannetta/gioco/con/piume/3/400/59841_pla_katzenfederspiel_fg_4943_3.jpg');
$feather->category->getIcon();
// var_dump($feather);

$pluto = new Accessory('pluto-gram','Pluto','Waagenet',new Category('dog'),475,false,'carbon Steel');
$pluto->getProductImage('https://eu.waagenet.de/wp-content/uploads/sites/5/2022/04/gram-pluto-veterinary-dog-scale.jpg');
$pluto->category->getIcon();
// var_dump($pluto);

$catLounge = new Accessory('graffiatoio-cat-lounge','Graffiatoio Cat Lounge','Zooplus',new Category('cat'),12.49,true,'paper');
$catLounge->getProductImage('https://shop-cdn-m.mediazs.com/bilder/graffiatoio/cat/lounge/9/400/icon_topseller_1_2021_12_23t151502_477_9.jpg');
$catLounge->category->getIcon();
// var_dump($catLounge);

$products = [$bone,$felix,$duck,$feather,$pluto,$catLounge];

?>