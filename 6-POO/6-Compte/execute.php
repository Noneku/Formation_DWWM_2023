<?php
include "Client.class.php";
include "Compte.class.php";

$client1 = new Client('EE111111', "Girard", "Fabien", '0611111111');
$client2 = new Client('EE222222', "Martin", "Pierre", '0612121212');

$compte1 = new Compte($client1);
$compte2 = new Compte($client2);

$compte1->crediter(1000);
$compte1->debiter(200);
$compte1->crediter(700);
$compte1->debiter(500, $compte2);
$compte1->crediter(700, $compte2);
$compte1->afficherRésumé();

$compte2->crediterCpt(500, $compte1);
$compte2->crediter(1500);
$compte2->debiter(700, $compte1);
$compte2->afficherRésumé();

echo "Nombre de comptes créés: " . Compte::getNombreComptes() . "\n";

?>
