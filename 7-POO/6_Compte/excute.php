<?php

include "compte.classe.php";

echo "Donner le CIN : ";
$CIN = readline();
echo "Donner le Nom : ";
$Nom = readline();
echo "Donner le Prénom : ";
$Prénom = readline();
echo "Donner le numéro de téléphone : ";
$Tél = readline();
echo "Donner votre solde : ";
$solde = readline();

$compte1 = new Compte($CIN, $Nom, $Prénom, $Tél, $solde);

$compte2 = new Compte("FR746", "SOUSOU", "FAFA", "64416168", 4000);

echo "Donner le montant à déposer : ";
$montantDepot = readline();
$compte1->crediter($montantDepot);
$compte1->afficher();
echo "Opération effectuée avec succès." . PHP_EOL;

echo "Créditer le compte 2 à partir du compte 1." . PHP_EOL;
echo "Donner le montant à déposer : ";
$montantDepot = readline();
$compte1->crediterCpt($montantDepot, $compte2);
$compte2->afficher();
echo "Donner le montant à retirer : ";
$montantRetrait = readline();
$compte1->debiter($montantRetrait);
echo "Opération effectuée avec succès." . PHP_EOL;
$compte2->afficher();;
/*
echo "Donner le CIN : ";
$CIN = readline();
echo "Donner le Nom : ";
$Nom = readline();
echo "Donner le Prénom : ";
$Prénom = readline();
echo "Donner le numéro de téléphone : ";
$Tél = readline();
echo "Donner le nom du propriétaire : ";
$proprietaire = readline();
echo "Donner votre solde : ";
$solde = readline();*/

//$client2 = new Client($CIN, $Nom, $Prénom, $Tél, $proprietaire);
//$compte3 = new Compte($solde, $client2);
//$compte3->afficher();

/*echo "Débiter le compte 1 et créditer le compte 2." . PHP_EOL;
echo "Donner le montant à retirer : ";
$montantRetrait = readline();
$compte1->debiter($montantRetrait);
echo "Opération effectuée avec succès." . PHP_EOL;

echo "Informations du compte 1 :" . PHP_EOL;
$compte1->afficher();
echo "Informations du compte 2 :" . PHP_EOL;
$compte2->afficher();

Compte::afficherNombreComptes();

/*
//Inclure le fichier contenant les classes
include "compte.classe.php";

echo "Donner Le CIN:";
$CIN = readline();
echo "Donner Le Nom:";
$Nom = readline();
echo "Donner Le Prénom:";
$Prénom = readline();
echo "Donner Le numéro de téléphone:";
$Tél = readline();
echo "Donner votre solde:";
$solde = readline();

//creation compte1




//$client1 = new Client("EE112","SALIM" , "OMAR","0781851085" );
$compte = new Compte($CIN,$Nom,$Prénom,$Tél,$solde);
//$compte = new Compte("AZERTY","SAH","ASA",076,3000);
$compte2 = new Compte("FR746", "SOUSOU", "FAFA", 64416168, 4000);
//$client->afficher();
echo PHP_EOL;
//$compte->afficher();

echo "Donner le montant à déposer:";
$compte= readline();
$compte1->crediter(3000);
$compte1->afficher(); 
echo "Opération bien effectuée";
echo PHP_EOL;
 
echo "Crediter le compte 2 à partir du compt 1";
echo "Donner le montant à déposer:";
$compte = readline();
$compte1->crediterCpt(1000, $compte2);
$compte2->afficher(); 
echo "Donner le montant à retirer:";
$compte = readline();
$compte1->debiter(1000); 

echo "Opération bien effectuée";echo PHP_EOL;
$compte2->crediter(1500);

 //$compte1->afficherOperation();


echo "Donner Le CIN:";
$CIN = readline();

echo "Donner Le Nom:";
$Nom = readline();

echo "Donner Le Prénom:";
$Prénom = readline();

echo "Donner Le numéro de téléphone:";
$Tél = readline();

echo "Donner Le nom du proprietaire:";
$proprietaire = readline();

echo "Donner votre solde:";
$solde = readline();



//$client2 = new Client("EE333444","KARIMI","SAMIR","0622222" );
//$compte2 = new Compte(1000, $client2);
$client2->afficher();



echo "Débiter le compte 1 et créditer le com";echo PHP_EOL;
echo "donner le montant a retirer";echo PHP_EOL;
$compte = readline();
$compte1->debiter(3000); 

echo "Opération bien effectuée";




//Donner le montant à retirer: 1000
//Opération bien effectuée

// Créditer le compte1 et débiter le compte2

// Afficher les informations des deux comptes
echo "Informations du compte 1 :";
echo PHP_EOL;
$compte1->afficherOperation();
echo "Informations du compte 2 :";
echo PHP_EOL;

//$compte1->crediterCpt(100, $compte2); // Crédite 100 au compte 1 et débite 100 du compte 2
//$compte1->afficherOperation(); // Affiche les informations du compte 1
//$compte2->afficherOperation(); // Affiche les informations du compte 2

Compte::afficherNombreComptes();

*/


?>