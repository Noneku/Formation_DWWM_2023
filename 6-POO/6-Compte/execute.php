<?php

include "compte.class.php";

// $cin = readline ("Entrez votre CIN : ");
// $prenom = readline ("Entrez votre prénom : ");
// $nom = readline ("Entrez votre nom : ");
// $tel = readline ("Entrez votre numéro de téléphone : ");

$client1 = new Client ("056131", "Mouaci", "Leïla", "06125847321");
$compte1 = new Compte ($client1);
$compte1->afficherCpte($client1);
// $compte1->crediter(500);

$client2 = new Client ("14561G", "Pixou", "Duky", "06842561231");
$compte2 = new Compte ($client2);
$compte2->afficherCpte($client2);
// $compte2->crediterCpte(250, $compte1);

$client3 = new Client ("1561321", "Catty", "Iris", "0254545");
$compte3 = new Compte ($client3);
$compte3 -> afficherCpte($client3);

$compte1->debiter(500);
$compte1->afficherCpte($client1);

$compte1->afficherCpte($client1);
$compte1->crediter(1000);
$compte1->afficherCpte($client1);
$compte1->debiter(500);
$compte1->afficherCpte($client1);
$compte2->afficherCpte($client2);
$compte1->debiterCpte(500, $compte2);
$compte2->afficherCpte($client2);
?>