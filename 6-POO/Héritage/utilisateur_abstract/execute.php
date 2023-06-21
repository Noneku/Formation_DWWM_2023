<?php

include("developpeur.php");
include("manager.php");

$developpeur = new Developpeur ("Dupond", "Louis", "louisDupond@gmail.com", "07.80.56.48.21", 10000, "PHP");
echo $developpeur->afficher();
echo "\n";
$developpeur2 = new Developpeur ("Martin", "Jean", "martin_jean@gmail.com", "07.82.53.45.20", 20000, "JavaScript");
echo $developpeur2->afficher();

echo "\n";
echo "\n";

$manager = new Manager ("Dubois", "Pierre", "DuboisPierre@gmail.com", "06.80.16.44.27", 30000, "Informatique");
echo $manager->afficher();
echo "\n";
$manager2 = new Manager ("Preux", "Jules", "jules.preux@gmail.com", "06.22.55.55.00", 150000, "Direction");
echo $manager2->afficher();

?>