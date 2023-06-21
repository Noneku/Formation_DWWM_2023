<?php

include("employe.php");

$employe1 = new Employe ("Wang", "Ada", 20000000);
echo $employe1->__toString();
echo "\n";
$employe2 = new Employe ("Kennedy", "Leon", 30000000);
echo $employe2->__toString();


?>