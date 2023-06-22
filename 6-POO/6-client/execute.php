<?php

include "client.class.php";
include "compte.class.php";

// Création d'un client
$client = new Client('123456789', 'Delourme', 'Amaury', 0645153544);

// Création d'un compte pour le client
$compte = new Compte($client);

// Créditer le compte
$compte->crediter(1000);

// Débiter le compte
$compte->debiter(500);

// Afficher le résumé du compte
$compte->afficherRésumé();
echo "\n";

// Création d'un 2eme client
$client2 = new Client('123486957', 'Josman', 'JOS', 0654);

// Création d'un compte pour le client
$compte2 = new Compte($client);

// Créditer le compte
$compte2->crediter(8000);

// Débiter le compte
$compte2->debiter(500);

// Afficher le résumé du compte
$compte2->afficherRésumé();





// Créditer le compte 1 avec 200 et débiter le compte 2
$compte->crediterCpt(200, $compte2);

?>