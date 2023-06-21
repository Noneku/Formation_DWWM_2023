<?php

include"Personne.class.php";
include"Developpeur.class.php";
include"Manager.class.php";

$manager=new Manager("LACHGAR","Jean","ouhy@gmal.com","0650403201",3000,"informatique");
$dev=new Developpeur("SALIM","Martin","ujh@gmal.com","0656127812",1000,"PHP");
$manager2=new Manager("Alain","Terieur","pouhy@gmal.com","0650408956",3000,"comptabilité");
$dev2=new Developpeur("Sarah","Croche","SRTY@gmal.com","0656127123",1000,"PHP");

$manager->calculerSalaire();
$dev->calculerSalaire();
$manager2->calculerSalaire();
$dev2->calculerSalaire();


$manager->Afficher();
echo "\n";
$manager2->Afficher();
echo "\n";
echo "\n";
echo $dev;
echo "\n";
echo $dev2;

// $personn=new Personne("Sarah","Croche","SRTY@gmal.com","0656127123",1000);

?>