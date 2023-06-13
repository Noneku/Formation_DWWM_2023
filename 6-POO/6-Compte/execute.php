<?php

include "client.class.php";
include "compte.class.php";

$client = new Client("123456789", "Dupont", "Jean", "0123456789");
$client->afficher();

$client2 = new Client("625456429", "Muzan", "Kibutsuji", "0229556689");
$client2->afficher();

$compte1 = new Compte(30000,$client);
$compte2 = new Compte(2000,$client2);




// var_dump($client);
// var_dump($client2);

$compte1->crediter(10000);

$compte1->afficherResume();

$compte2->crediterCpt(3000 , $compte1);

$compte1->afficherResume();

$compte1->debiter(10000);

$compte1->afficherResume();


$compte1->debiterCpt(4000 , $compte2);


$compte2->afficherResume();


Compte::afficherNombreComptes();

?>