<?php

include "compte.class.php";

$cni = readline ("Entrez votre CNI : ");
$prenom = readline ("Entrez votre prénom : ");
$nom = readline ("Entrez votre nom : ");
$tel = readline ("Entrez votre numéro de téléphone : ");

$compte1 = new Compte ($cni, $nom, $prenom, $tel, 5000);
$compte1->afficherCpte();
$compte1->crediter(500);

$cni = readline ("Entrez votre CIN : ");
$prenom = readline ("Entrez votre prénom : ");
$nom = readline ("Entrez votre nom : ");
$tel = readline ("Entrez votre numéro de téléphone : ");
$compte2 = new Compte ($cni, $nom, $prenom, $tel, 5000);
$compte2->afficherCpte();
// $compte2->crediterCpte(250, $compte1);

$cni = readline ("Entrez votre CIN : ");
$prenom = readline ("Entrez votre prénom : ");
$nom = readline ("Entrez votre nom : ");
$tel = readline ("Entrez votre numéro de téléphone : ");
$client3 = new Client ($cni, $nom, $prenom, $tel);
$compte3 = new Compte ($cni, $nom, $prenom, $tel, 5000);
$compte3 -> afficherCpte();

$compte1->debiter(500);
$compte1->afficherCpte();

$compte1->afficherCpte();
$compte1->crediter(1000);
$compte1->afficherCpte();
$compte1->debiter(500);
$compte1->afficherCpte();
$compte2->afficherCpte();
$compte1->debiterCpte(500, $compte2);
$compte2->afficherCpte();
$compte3 ->afficherCpte();
?>