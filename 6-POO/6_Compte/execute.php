<?php
include_once "compte.class.php";
include_once "client.class.php";
// Programme de test

// Informations sur le compte 1 avec la créditation et l'affichage
$compte = new Compte("123456789", "Doe", "John", "0123456789", "20000");
$compte->crediter(500);
$compte->afficherResume();

// Informations sur le compte 2 avec la créditation  et l'affichage
$compte2 = new Compte("987654321", "Smith", "Alice", "9876543210", "150000");
$compte2->crediterCpt(300, $compte);
$compte2->afficherResume();

// Débiter du compte 1
$compte->debiter(200);
$compte->afficherResume();

// débiter du compte 2
$compte2->debiterCpt(150, $compte);
$compte2->afficherResume();

// Afficher le nombre de comptes 
Compte::afficherNombreComptes();
