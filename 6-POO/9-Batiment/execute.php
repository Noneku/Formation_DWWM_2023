<?php 

require_once('./batiment.class.php');
require_once('./maison.class.php');

$maison = new Maison("23 avenue pilki", "1245", 5);
$batiment = new Batiment("56 avenue rolipop", "56874");

 var_dump($maison);
 var_dump($batiment);


?>