<?php

include("maison.php");


$maison = new Maison ("50 rue de l'Alma", 13, 6);
echo $maison->__toString();
echo "\n";
print_r($maison);

?>