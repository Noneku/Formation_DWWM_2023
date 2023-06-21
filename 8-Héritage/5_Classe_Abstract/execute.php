<?php

include_once "Personne.classe.php";
include_once "developpeur.classe.php";
include_once "manager.classe.php";

//$specialite,$nom,$prenom,$mail,$telephone,$salaire LACHGAR Jean 
$developpeur1 = new Developpeur("LACHGAR","Jean",3000,"LachgarJean@gmail.com","098765","PHP");
$developpeur2 = new Developpeur("Loic","Jean",5000,"LoicJean@gmail.com","098765098","PHP");
echo $developpeur1->afficher();
echo PHP_EOL;
echo $developpeur2->afficher();
echo PHP_EOL;
echo "augmentation du salaire pour Mr Lachghar:"." ".$developpeur1->claculerSalire()." "."EUROS";
echo PHP_EOL;
echo "augmentation du salaire pour Mr Loic:"." ".$developpeur2->claculerSalire()." "."EUROS";
echo PHP_EOL;

$manager1 = new Manager("SALIM","Martin",3000,"LachgarJean@gmail.com","098765123","INFORMATIQUE");
$manager2 = new Manager("Frederic","Jean",5000,"LoicJean@gmail.com","0987650981","INFORMATIQUE");

echo PHP_EOL;
echo $manager1->afficher();
echo $manager2->afficher();
echo PHP_EOL;
echo "augmentation du salaire pour Mr Salim:"." ".$manager1->claculerSalire()." "."EUROS";
echo PHP_EOL;
echo "augmentation du salaire pour Mr Frederic:"." ".$manager2->claculerSalire()." "."EUROS";














?>