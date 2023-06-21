<?php

include("compte.class.php");


// COMPTE 1_______________________________________________________________________________________________________________________

$cin = readline ("Donner le CIN : ");
$nom = readline ("Donner le nom : ");
$prenom = readline ("Donner le prenom : ");
$tel = readline ("Donner le tel : ");
$solde = readline ("Donner le solde : ");
echo "\n";

$compte1 = new Compte ($cin, $nom, $prenom, $tel, $solde);
echo $compte1->afficherCompte();
echo "\n";
echo $compte1->afficherSolde();
echo "\n";
echo $compte1->afficher();
echo "\n";


$credit = readline ("Donner le montant à déposer : ");
echo "\n";
$compte1->crediter($credit)."\n";
echo $compte1->afficherCompte();
echo "\n";
echo $compte1->afficherSolde();
echo "\n";
echo $compte1->afficher();
echo "\n";


$debit = readline ("Donner le montant à retirer : ");
echo "\n";
$compte1->debiter($debit)."\n";
echo $compte1->afficherCompte();
echo "\n";
echo $compte1->afficherSolde();
echo "\n";
echo $compte1->afficher();


$compte1->crediterCpt(1000, $compte1);
echo "\n";
echo $compte1->afficherSolde();


$compte1->debiterCpt(1, $compte1);
echo "\n";
echo $compte1->afficherSolde();
echo "\n";
echo $compte1->resume();
echo "\n";
echo "\n";

// COMPTE 2_______________________________________________________________________________________________________________________

$cin = readline ("Donner le CIN : ");
$nom = readline ("Donner le nom : ");
$prenom = readline ("Donner le prenom : ");
$tel = readline ("Donner le tel : ");
$solde = readline ("Donner le solde : ");
echo "\n";

$compte2 = new Compte ($cin, $nom, $prenom, $tel, $solde);
echo $compte2->afficherCompte();
echo "\n";
echo $compte2->afficherSolde();
echo "\n";
echo $compte2->afficher();
echo "\n";


$credit = readline ("Donner le montant à déposer : ");
echo "\n";
$compte2->crediter($credit)."\n";
echo $compte2->afficherCompte();
echo "\n";
echo $compte2->afficherSolde();
echo "\n";
echo $compte2->afficher();
echo "\n";


$debit = readline ("Donner le montant à retirer : ");
echo "\n";
$compte2->debiter($debit)."\n";
echo $compte2->afficherCompte();
echo "\n";
echo $compte2->afficherSolde();
echo "\n";
echo $compte2->afficher();


$compte2->crediterCpt(50, $compte2);
echo "\n";
echo $compte2->afficherSolde();


$compte1->debiterCpt(1, $compte2);
echo "\n";
echo $compte2->afficherSolde();
echo "\n";
echo "\n";

echo $compte2->resume();


?>