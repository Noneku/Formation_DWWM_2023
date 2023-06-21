<?php

/*déclaration*/;


$a = 1;
$b = 2;
$c = 3;
$temp = 0;

//calcul

$temp = $b;
$b = $a;
$a = $c;
$c = $temp;


// resultat

echo "a =".$a;
echo "\n";
echo "b =".$b;
echo "\n";
echo "c =".$c;


 ?>
