<?php

include("professeur.php");

$professeur1 = new Professeur ("HATAKE", " Kakashi", 100000, "Ninja");
echo $professeur1->__toString();
echo "\n";
$professeur2 = new Professeur ("DUPONT", "Louis", 5000, "Génie Civil");
echo $professeur2->__toString();


?>
