<?php
include 'Cercle.class.php';

$c1 = new Cercle(1, 2, 3);
//print_r($c1);

//echo $c1->get_centre()->getAbcisse();

$pt1 =  $c1->get_centre();
echo $pt1->norme();





