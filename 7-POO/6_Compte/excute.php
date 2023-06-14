<?php


// Inclure le fichier contenant les classes
include "compte.classe.php";

echo "Donner Le CIN:";
$CIN = readline();

echo "Donner Le Nom:";
$Nom = readline();

echo "Donner Le Prénom:";
$Prénom = readline();

echo "Donner Le numéro de téléphone:";
$Tél = readline();


//creation compte1




$client1 = new Client("EE112","SALIM" , "OMAR","0781851085" );
$compte1 = new Compte(1000, $client1);
$client1->afficher();
$compte1->afficher();


echo "Donner le montant à déposer:";
$compte = readline();

$compte1->crediter(5000); 
echo "Opération bien effectuée";
$compte1->afficherOperation(); 

echo "Donner le montant à retirer:";
$compte = readline();
$compte1->debiter(1000); 
echo "Opération bien effectuée";
$compte1->afficherOperation();


echo "Donner Le CIN:";
$CIN = readline();

echo "Donner Le Nom:";
$Nom = readline();

echo "Donner Le Prénom:";
$Prénom = readline();

echo "Donner Le numéro de téléphone:";
$Tél = readline();


$client2 = new Client("EE333444","KARIMI","SAMIR","0622222" );
$compte2 = new Compte(1000, $client2);
$client2->afficher();

echo "Crediter le compte 2 à partir du compt 1";echo PHP_EOL;
echo "Donner le montant à déposer:";
$compte = readline();
$compte1->crediterCpt(1000, $compte2);

echo "Débiter le compte 1 et créditer le com";echo PHP_EOL;
echo "donner le montant a retirer";echo PHP_EOL;
$compte = readline();
$compte1->debiter(3000); 

echo "Opération bien effectuée";
$compte2->afficherOperation();



//Donner le montant à retirer: 1000
//Opération bien effectuée

// Créditer le compte1 et débiter le compte2
$compte2 = new Compte(500, $client1);
$compte1->crediterCpt(100, $compte2);

// Afficher les informations des deux comptes
echo "Informations du compte 1 :";
echo PHP_EOL;
$compte1->afficherOperation();
echo "Informations du compte 2 :";
echo PHP_EOL;
$compte2->afficherOperation();

//$compte1->crediterCpt(100, $compte2); // Crédite 100 au compte 1 et débite 100 du compte 2
//$compte1->afficherOperation(); // Affiche les informations du compte 1
//$compte2->afficherOperation(); // Affiche les informations du compte 2

Compte::afficherNombreComptes();




?>